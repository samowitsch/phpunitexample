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
 * Bar
 */
class Bar extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * field1
     *
     * @var
     */
    protected $field1 = null;

    /**
     * field2
     *
     * @var
     */
    protected $field2 = null;

    /**
     * Returns the field1
     *
     * @return  $field1
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
     * @return  $field2
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
}
