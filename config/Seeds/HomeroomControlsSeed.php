<?php
use Migrations\AbstractSeed;

/**
 * HomeroomControls seed.
 */
class HomeroomControlsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'department' => 1,
                'class' => null,
                'morning_HR' => 1,
                'evening_HR' => 1
            ]
        ];

        $table = $this->table('homeroom_controls');
        $table->insert($data)->save();
    }
}
