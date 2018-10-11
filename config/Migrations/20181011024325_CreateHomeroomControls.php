<?php
use Migrations\AbstractMigration;

class CreateHomeroomControls extends AbstractMigration
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
        $table = $this->table('homeroom_controls');
        // 学科
        $table->addColumn('department','integer',[
            'null' => false
        ]);
        $table->addColumn('class','string',
        [
            'null' => true
        ]);
        // 0はHR開始前なので正常
        // 1になった後カードをかざした人はHR欠席
        $table->addColumn('morning_HR','integer');
        // 0は帰りのHR開始前0の時にかざした人は早退
        // 1になっていたら正常
        $table->addColumn('evening_HR','integer');
        $table->addColumn('creat_at','timestamp');
        $table->create();
    }
}
