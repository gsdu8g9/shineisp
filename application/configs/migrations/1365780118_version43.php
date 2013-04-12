<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version43 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropTable('products_tranches_includes');
        $this->removeColumn('panels', 'uri');
        $this->removeColumn('panels', 'location');
        $this->removeColumn('panels', 'username');
        $this->removeColumn('panels', 'password');
        $this->addColumn('custom_attributes', 'panel_id', 'integer', '11', array(
             ));
    }

    public function down()
    {
        $this->createTable('products_tranches_includes', array(
             'tranche_id' => 
             array(
              'type' => 'integer',
              'unsigned' => '',
              'primary' => '1',
              'autoincrement' => '',
              'length' => '4',
             ),
             'include_id' => 
             array(
              'type' => 'integer',
              'unsigned' => '',
              'primary' => '1',
              'autoincrement' => '',
              'length' => '4',
             ),
             ), array(
             'type' => '',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'tranche_id',
              1 => 'include_id',
             ),
             'collate' => '',
             'charset' => 'UTF8',
             ));
        $this->addColumn('panels', 'uri', 'string', '', array(
             ));
        $this->addColumn('panels', 'location', 'string', '', array(
             ));
        $this->addColumn('panels', 'username', 'string', '', array(
             ));
        $this->addColumn('panels', 'password', 'string', '', array(
             ));
        $this->removeColumn('custom_attributes', 'panel_id');
    }
}