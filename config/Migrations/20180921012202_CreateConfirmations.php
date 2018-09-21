<?php
use Migrations\AbstractMigration;

class CreateConfirmations extends AbstractMigration
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
        $table = $this->table('confirmations');
        $table->addColumn('student_number','string',
        [
            'null' => false
        ]);
        $table->addColumn('atend','integer',
        [
            'null' => true
        ]);
        $table->addColumn('lesson_A','integer',
        [
            'null' => true
        ]);
        $table->addColumn('lesson_B','integer',
        [
            'null' => true
        ]);
        $table->addColumn('lesson_C','integer',
        [
            'null' => true
        ]);
        $table->addColumn('lesson_D','integer',
        [
            'null' => true
        ]);
        $table->addColumn('leave','integer',
        [
            'null' => true
        ]);
        $table->addColumn('judge','integer',
        [
            'null' => true
        ]);
        $table->create();
    }
}
