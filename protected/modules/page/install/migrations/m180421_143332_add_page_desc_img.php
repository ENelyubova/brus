<?php

class m180421_143332_add_page_desc_img extends yupe\components\DbMigration
{
	public function safeUp()
	{
        $this->addColumn('{{page_page}}', 'desc_img', 'string');
	}

	public function safeDown()
	{
        $this->dropColumn('{{page_page}}', 'desc_img');
	}
}