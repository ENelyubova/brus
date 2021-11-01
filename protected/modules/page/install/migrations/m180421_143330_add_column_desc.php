<?php

class m180421_143330_add_column_desc extends yupe\components\DbMigration
{
	public function safeUp()
	{
        $this->addColumn('{{page_page}}', 'desc', 'text');
	}
 
	public function safeDown()
	{
        $this->dropColumn('{{page_page}}', 'desc');
	}
}