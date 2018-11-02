<?php
use Migrations\AbstractMigration;

class CreateStudentLessons extends AbstractMigration
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
        $table = $this->table('student_lessons');
        //学籍番号
        $table->addColumn('student_number','string',
        [
            'null' => false
        ]);
        //遅刻カウント（最初は０）
        $table->addColumn('lete','integer',
        [
            'default' => 0
        ]);
        //欠席カウント(最初は０)
        $table->addColumn('clerk','integer',
        [
            'default' => 0
        ]);
        $table->addColumn('grade','integer');
        $table->addColumn('month','integer');
        $table->create();
    }
}
