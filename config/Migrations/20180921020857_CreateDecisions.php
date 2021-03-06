<?php
use Migrations\AbstractMigration;

class CreateDecisions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('decisions',['id' => false, 'primary_key' => ['judge_number']]);
        //判断番号
        $table->addColumn('judge_number','integer',
        [
            'null' => false
        ]);
        //判断理由
        $table->addColumn('description','string',
        [
            'null' => true
        ]);
        $table->create();
    }
}
