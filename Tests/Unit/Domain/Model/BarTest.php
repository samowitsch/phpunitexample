<?php
namespace Samowitsch\Phpunitexample\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case.
 *
 * @author Christian Sonntag <pismo@web.de>
 */
class BarTest extends UnitTestCase
{
    /**
     * @var \Samowitsch\Phpunitexample\Domain\Model\Bar
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Samowitsch\Phpunitexample\Domain\Model\Bar();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getField1ReturnsInitialValueFor()
    {
    }

    /**
     * @test
     */
    public function setField1ForSetsField1()
    {
    }

    /**
     * @test
     */
    public function getField2ReturnsInitialValueFor()
    {
    }

    /**
     * @test
     */
    public function setField2ForSetsField2()
    {
    }
}
