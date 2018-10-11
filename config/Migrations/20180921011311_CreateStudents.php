<?php
use Migrations\AbstractMigration;

class CreateStudents extends AbstractMigration
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
        $table = $this->table('students');
        //学籍番号
        $table->addColumn('student_number','string',
        [
            'null' => false
        ]);
        //icカードナンバー
        $table->addColumn('ic_number','string',
        [
            'null' => false
        ]);
        //学科名
        $table->addColumn('department','integer',
        [
            'null' => false
        ]);
        //出席番号
        $table->addColumn('attendance_number','integer',
        [
            'null' => false
        ]);
        $table->addColumn('student_name','string',
        [
            'null' => false
        ]);
        //学年
        $table->addColumn('year','integer',
        [
            'null' => false
        ]);
        //クラス
        $table->addColumn('class','string',
        [
            'null' => true
        ]);
        $table->create();
    }
}
