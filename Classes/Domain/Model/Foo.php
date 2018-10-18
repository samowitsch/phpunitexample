<?php
namespace Samowitsch\Phpunitexample\Domain\Model;

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
 * Foo
 */
class Foo extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * field1
     *
     * @var string
     */
    protected $field1 = '';

    /**
     * field2
     *
     * @var string
     */
    protected $field2 = '';

    /**
     * field3
     *
     * @var string
     */
    protected $field3 = '';

    /**
     * barRelation
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Samowitsch\Phpunitexample\Domain\Model\Bar>
     * @cascade remove
     */
    protected $barRelation = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->barRelation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the field1
     *
     * @return string $field1
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Sets the field1
     *
     * @param string $field1
     * @return void
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;
    }

    /**
     * Returns the field2
     *
     * @return string $field2
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Sets the field2
     *
     * @param string $field2
     * @return void
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
    }

    /**
     * Returns the field3
     *
     * @return string $field3
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Sets the field3
     *
     * @param string $field3
     * @return void
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;
    }

    /**
     * Adds a Bar
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Bar $barRelation
     * @return void
     */
    public function addBarRelation(\Samowitsch\Phpunitexample\Domain\Model\Bar $barRelation)
    {
        $this->barRelation->attach($barRelation);
    }

    /**
     * Removes a Bar
     *
     * @param \Samowitsch\Phpunitexample\Domain\Model\Bar $barRelationToRemove The Bar to be removed
     * @return void
     */
    public function removeBarRelation(\Samowitsch\Phpunitexample\Domain\Model\Bar $barRelationToRemove)
    {
        $this->barRelation->detach($barRelationToRemove);
    }

    /**
     * Returns the barRelation
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Samowitsch\Phpunitexample\Domain\Model\Bar> $barRelation
     */
    public function getBarRelation()
    {
        return $this->barRelation;
    }

    /**
     * Sets the barRelation
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Samowitsch\Phpunitexample\Domain\Model\Bar> $barRelation
     * @return void
     */
    public function setBarRelation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $barRelation)
    {
        $this->barRelation = $barRelation;
    }
}
