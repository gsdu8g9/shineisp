<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version116 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('isp', 'logo_email', 'string', '', array(
             'notnull' => '',
             ));
    }

    public function down()
    {
        $this->removeColumn('isp', 'logo_email');
    }
}