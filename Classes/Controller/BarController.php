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
 * BarController
 */
class BarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $bars = $this->barRepository->findAll();
        $this->view->assign('bars', $bars);
    }

    /**
     * action show
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Bar $bar
     * @return void
     */
    public function showAction(\Samowitsch\Phpunitexample\Domain\Model\Bar $bar)
    {
        $this->view->assign('bar', $bar);
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
     * @param \Samowitsch\Phpunitexample\Domain\Model\Bar $newBar
     * @return void
     */
    public function createAction(\Samowitsch\Phpunitexample\Domain\Model\Bar $newBar)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->barRepository->add($newBar);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Bar $bar
     * @ignorevalidation $bar
     * @return void
     */
    public function editAction(\Samowitsch\Phpunitexample\Domain\Model\Bar $bar)
    {
        $this->view->assign('bar', $bar);
    }

    /**
     * action update
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Bar $bar
     * @return void
     */
    public function updateAction(\Samowitsch\Phpunitexample\Domain\Model\Bar $bar)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->barRepository->update($bar);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Bar $bar
     * @return void
     */
    public function deleteAction(\Samowitsch\Phpunitexample\Domain\Model\Bar $bar)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->barRepository->remove($bar);
        $this->redirect('list');
    }
}
