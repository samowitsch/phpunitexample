<?php
namespace Samowitsch\Phpunitexample\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case.
 *
 * @author Christian Sonntag <pismo@web.de>
 */
class FooControllerTest extends UnitTestCase
{
    /**
     * @var \Samowitsch\Phpunitexample\Controller\FooController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Samowitsch\Phpunitexample\Controller\FooController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllFoosFromRepositoryAndAssignsThemToView()
    {

        $allFoos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $fooRepository = $this->getMockBuilder(\Samowitsch\Phpunitexample\Domain\Repository\FooRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $fooRepository->expects(self::once())->method('findAll')->will(self::returnValue($allFoos));
        $this->inject($this->subject, 'fooRepository', $fooRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('foos', $allFoos);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenFooToView()
    {
        $foo = new \Samowitsch\Phpunitexample\Domain\Model\Foo();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('foo', $foo);

        $this->subject->showAction($foo);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenFooToFooRepository()
    {
        $foo = new \Samowitsch\Phpunitexample\Domain\Model\Foo();

        $fooRepository = $this->getMockBuilder(\Samowitsch\Phpunitexample\Domain\Repository\FooRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $fooRepository->expects(self::once())->method('add')->with($foo);
        $this->inject($this->subject, 'fooRepository', $fooRepository);

        $this->subject->createAction($foo);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenFooToView()
    {
        $foo = new \Samowitsch\Phpunitexample\Domain\Model\Foo();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('foo', $foo);

        $this->subject->editAction($foo);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenFooInFooRepository()
    {
        $foo = new \Samowitsch\Phpunitexample\Domain\Model\Foo();

        $fooRepository = $this->getMockBuilder(\Samowitsch\Phpunitexample\Domain\Repository\FooRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $fooRepository->expects(self::once())->method('update')->with($foo);
        $this->inject($this->subject, 'fooRepository', $fooRepository);

        $this->subject->updateAction($foo);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenFooFromFooRepository()
    {
        $foo = new \Samowitsch\Phpunitexample\Domain\Model\Foo();

        $fooRepository = $this->getMockBuilder(\Samowitsch\Phpunitexample\Domain\Repository\FooRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $fooRepository->expects(self::once())->method('remove')->with($foo);
        $this->inject($this->subject, 'fooRepository', $fooRepository);

        $this->subject->deleteAction($foo);
    }
}
