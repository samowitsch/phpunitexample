<?php
namespace Samowitsch\Phpunitexample\Tests\Unit\Controller;


use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case.
 *
 * @author Christian Sonntag <pismo@web.de>
 */
class BarControllerTest extends UnitTestCase
{
    /**
     * @var \Samowitsch\Phpunitexample\Controller\BarController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Samowitsch\Phpunitexample\Controller\BarController::class)
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
    public function listActionFetchesAllBarsFromRepositoryAndAssignsThemToView()
    {

        $allBars = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $barRepository = $this->getMockBuilder(\Samowitsch\Phpunitexample\Domain\Repository\BarRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $barRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBars));
        $this->inject($this->subject, 'barRepository', $barRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('bars', $allBars);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBarToView()
    {
        $bar = new \Samowitsch\Phpunitexample\Domain\Model\Bar();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('bar', $bar);

        $this->subject->showAction($bar);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenBarToBarRepository()
    {
        $bar = new \Samowitsch\Phpunitexample\Domain\Model\Bar();

        $barRepository = $this->getMockBuilder(\Samowitsch\Phpunitexample\Domain\Repository\BarRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $barRepository->expects(self::once())->method('add')->with($bar);
        $this->inject($this->subject, 'barRepository', $barRepository);

        $this->subject->createAction($bar);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenBarToView()
    {
        $bar = new \Samowitsch\Phpunitexample\Domain\Model\Bar();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('bar', $bar);

        $this->subject->editAction($bar);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenBarInBarRepository()
    {
        $bar = new \Samowitsch\Phpunitexample\Domain\Model\Bar();

        $barRepository = $this->getMockBuilder(\Samowitsch\Phpunitexample\Domain\Repository\BarRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $barRepository->expects(self::once())->method('update')->with($bar);
        $this->inject($this->subject, 'barRepository', $barRepository);

        $this->subject->updateAction($bar);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenBarFromBarRepository()
    {
        $bar = new \Samowitsch\Phpunitexample\Domain\Model\Bar();

        $barRepository = $this->getMockBuilder(\Samowitsch\Phpunitexample\Domain\Repository\BarRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $barRepository->expects(self::once())->method('remove')->with($bar);
        $this->inject($this->subject, 'barRepository', $barRepository);

        $this->subject->deleteAction($bar);
    }
}
