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
        $table->addColumn('student_number','string',
        [
            'null' => false
        ]);
        $table->addColumn('student_name','string',
        [
            'null' => false
        ]);
        $table->addColumn('atend_number','integer',
        [
            'null' => false
        ]);
        $table->addColumn('department','string',
        [
            'null' => false
        ]);
        $table->addColumn('year','integer',
        [
            'null' => false
        ]);
        $table->addColumn('class','string',
        [
            'null' => true
        ]);
        $table->create();
    }
}
