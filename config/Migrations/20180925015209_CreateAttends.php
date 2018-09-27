<?php
use Migrations\AbstractMigration;

class CreateAttends extends AbstractMigration
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
        $table = $this->table('attends');
        //学籍番号
        $table->addColumn('student_number','string',
        [
            'null' => false
        ]);
        $table->addColumn('attend_time','time',
        [
            'null' => false
        ]);
        $table->addColumn('attend_state','integer',
        [
            'null' => false
        ]);
        $table->addColumn('leave_time','time',
        [
            'null' => false
        ]);
        $table->addColumn('leave_state','integer',
        [
            'null' => false
        ]);
        //最終判断
        $table->addColumn('all_situation','integer',
        [
            'null' => false
        ]);
        $table->create();
    }
}
