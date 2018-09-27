<?php
use Migrations\AbstractMigration;

class CreateTeachers extends AbstractMigration
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
        $table->addColumn('username','string',
        [
            'null' => false
        ]);
        $table->addColumn('password','string',
        [
            'null' => false
        ]);
        $table->addColumn('ic_number','string',
        [
            'null' => false
        ]);
        $table->create();
    }
}
