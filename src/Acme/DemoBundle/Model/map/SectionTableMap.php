<?php

namespace Acme\DemoBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'section' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.Acme.DemoBundle.Model.map
 */
class SectionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src.Acme.DemoBundle.Model.map.SectionTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('section');
        $this->setPhpName('Section');
        $this->setClassname('Acme\\DemoBundle\\Model\\Section');
        $this->setPackage('src.Acme.DemoBundle.Model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 100, null);
        $this->addForeignKey('pid', 'Pid', 'INTEGER', 'section', 'id', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Parent', 'Acme\\DemoBundle\\Model\\Section', RelationMap::MANY_TO_ONE, array('pid' => 'id', ), null, null);
        $this->addRelation('Children', 'Acme\\DemoBundle\\Model\\Section', RelationMap::ONE_TO_MANY, array('id' => 'pid', ), null, null, 'Childrens');
        $this->addRelation('Article', 'Acme\\DemoBundle\\Model\\Article', RelationMap::ONE_TO_MANY, array('id' => 'section_id', ), null, null, 'Articles');
    } // buildRelations()

} // SectionTableMap
