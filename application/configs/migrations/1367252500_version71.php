<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version71 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('registrars', 'description', 'string', '', array(
             'notnull' => '1',
             ));
        $this->addColumn('registrars', 'help', 'string', '', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('registrars', 'description');
        $this->removeColumn('registrars', 'help');
    }
}