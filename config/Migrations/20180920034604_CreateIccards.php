<?php
use Migrations\AbstractMigration;

class CreateIccards extends AbstractMigration
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
        $table = $this->table('iccards');
        $table->addColumn('ic_number','string',
        [
            'null' => false
        ]);
        $table->addColumn('student_number','string',
        [
            'null' => false
        ]);
        $table->create();
    }
}
