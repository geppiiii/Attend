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
        //学籍番号
        $table->addColumn('student_number','string',
        [
            'null' => false
        ]);
        //欠席日付
        $table->addColumn('absence_date','date',
        [
            'null' => true
        ]);
        //理由番号
        $table->addColumn('reason','string',
        [
            'null' => true
        ]);
        $table->create();
    }
}
