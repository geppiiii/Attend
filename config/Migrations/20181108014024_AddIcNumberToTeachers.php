<?php
use Migrations\AbstractMigration;

class AddIcNumberToTeachers extends AbstractMigration
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
        $table = $this->table('teachers');
        $table->addColumn('ic_number','string');
        $table->update();
    }
}
