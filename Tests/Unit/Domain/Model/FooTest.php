<?php
namespace Samowitsch\Phpunitexample\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case.
 *
 * @author Christian Sonntag <pismo@web.de>
 */
class FooTest extends UnitTestCase
{
    /**
     * @var \Samowitsch\Phpunitexample\Domain\Model\Foo
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Samowitsch\Phpunitexample\Domain\Model\Foo();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getField1ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getField1()
        );
    }

    /**
     * @test
     */
    public function setField1ForStringSetsField1()
    {
        $this->subject->setField1('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'field1',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getField2ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getField2()
        );
    }

    /**
     * @test
     */
    public function setField2ForStringSetsField2()
    {
        $this->subject->setField2('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'field2',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getField3ReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getField3()
        );
    }

    /**
     * @test
     */
    public function setField3ForStringSetsField3()
    {
        $this->subject->setField3('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'field3',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBarRelationReturnsInitialValueForBar()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getBarRelation()
        );
    }

    /**
     * @test
     */
    public function setBarRelationForObjectStorageContainingBarSetsBarRelation()
    {
        $barRelation = new \Samowitsch\Phpunitexample\Domain\Model\Bar();
        $objectStorageHoldingExactlyOneBarRelation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneBarRelation->attach($barRelation);
        $this->subject->setBarRelation($objectStorageHoldingExactlyOneBarRelation);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneBarRelation,
            'barRelation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addBarRelationToObjectStorageHoldingBarRelation()
    {
        $barRelation = new \Samowitsch\Phpunitexample\Domain\Model\Bar();
        $barRelationObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $barRelationObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($barRelation));
        $this->inject($this->subject, 'barRelation', $barRelationObjectStorageMock);

        $this->subject->addBarRelation($barRelation);
    }

    /**
     * @test
     */
    public function removeBarRelationFromObjectStorageHoldingBarRelation()
    {
        $barRelation = new \Samowitsch\Phpunitexample\Domain\Model\Bar();
        $barRelationObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $barRelationObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($barRelation));
        $this->inject($this->subject, 'barRelation', $barRelationObjectStorageMock);

        $this->subject->removeBarRelation($barRelation);
    }
}
