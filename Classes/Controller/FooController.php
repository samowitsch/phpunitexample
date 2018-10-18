<?php
namespace Samowitsch\Phpunitexample\Controller;

/***
 *
 * This file is part of the "PHP Unit example" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Christian Sonntag <pismo@web.de>
 *
 ***/

/**
 * FooController
 */
class FooController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * fooRepository
     *
     * @var \Samowitsch\Phpunitexample\Domain\Repository\FooRepository
     * @inject
     */
    protected $fooRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $foos = $this->fooRepository->findAll();
        $this->view->assign('foos', $foos);
    }

    /**
     * action show
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Foo $foo
     * @return void
     */
    public function showAction(\Samowitsch\Phpunitexample\Domain\Model\Foo $foo)
    {
        $this->view->assign('foo', $foo);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Foo $newFoo
     * @return void
     */
    public function createAction(\Samowitsch\Phpunitexample\Domain\Model\Foo $newFoo)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fooRepository->add($newFoo);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Foo $foo
     * @ignorevalidation $foo
     * @return void
     */
    public function editAction(\Samowitsch\Phpunitexample\Domain\Model\Foo $foo)
    {
        $this->view->assign('foo', $foo);
    }

    /**
     * action update
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Foo $foo
     * @return void
     */
    public function updateAction(\Samowitsch\Phpunitexample\Domain\Model\Foo $foo)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fooRepository->update($foo);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Foo $foo
     * @return void
     */
    public function deleteAction(\Samowitsch\Phpunitexample\Domain\Model\Foo $foo)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fooRepository->remove($foo);
        $this->redirect('list');
    }
}
