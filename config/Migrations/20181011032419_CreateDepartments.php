<?php
use Migrations\AbstractMigration;

class CreateDepartments extends AbstractMigration
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
        $table = $this->table('departments');
        // 学科名
        $table->addColumn('department_name','string');
        $table->create();
    }
}
