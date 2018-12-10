<?php
use Migrations\AbstractSeed;

/**
 * Absences seed.
 */
class AbsencesSeed extends AbstractSeed
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
                'student_number' => '0000001',
                'absence_date_start'=> '2018-11-11',
                'absence_date_end' => '2018-11-12',
                'state' => '1'
            ]
        ];

        $table = $this->table('absences');
        $table->insert($data)->save();
    }
}
