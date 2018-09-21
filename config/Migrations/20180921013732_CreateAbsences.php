<?php
use Migrations\AbstractMigration;

class CreateAbsences extends AbstractMigration
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
        $table = $this->table('absences');
        $table->addColumn('student_number','string',
        [
            'null' => false
        ]);
        $table->addColumn('absence_date','date',
        [
            'null' => true
        ]);
        $table->addColumn('reason','integer',
        [
            'null' => true
        ]);
        $table->create();
    }
}
