<?php

class m180421_143331_add_column_shema extends yupe\components\DbMigration
{
	public function safeUp()
	{
        $this->renameColumn('{{page_page}}', 'desc', 'character');
        $this->addColumn('{{page_page}}', 'shema', 'text');
        $this->addColumn('{{page_page}}', 'sertificate', 'text');
        $this->addColumn('{{page_page}}', 'delivery', 'text');
        $this->addColumn('{{page_page}}', 'price', 'string');
        $this->addColumn('{{page_page}}', 'document', 'string');
	}
 
	public function safeDown()
	{
	}
}