<?php

class m180421_143333_add_page_svg extends yupe\components\DbMigration
{
	public function safeUp()
	{
        $this->addColumn('{{page_page}}', 'svg1', 'text');
        $this->addColumn('{{page_page}}', 'svg2', 'text');
	}

	public function safeDown()
	{
        $this->dropColumn('{{page_page}}', 'svg1');
        $this->dropColumn('{{page_page}}', 'svg2');
	}
}