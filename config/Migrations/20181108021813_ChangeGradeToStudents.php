<?php
use Migrations\AbstractMigration;

class ChangeGradeToStudents extends AbstractMigration
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
        $table->changeColumn('year', 'integer', [
            'null' => true
        ]);
        $table->update();
    }
}
