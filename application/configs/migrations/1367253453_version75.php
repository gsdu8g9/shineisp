<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version75 extends Doctrine_Migration_Base
{
    public function up()
    {
    	$this->addColumn('emails_templates_sends', 'fromemail', 'string', '150', array(
    	));
    	
    }

    public function down()
    {
        $this->removeColumn('emails_templates_sends', 'fromemail');
    }
}