<?php
use Migrations\AbstractSeed;

/**
 * Attends seed.
 */
class AttendsSeed extends AbstractSeed
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
                'attend_time' => '',
                'attend_state' => 3,
                'leave_time' => '',
                'leave_state' => 3,
                'all_situation' => 3
            ],
            [
                'student_number' => '0000002',
                'attend_time' => '9:30:01',
                'attend_state' => 2,
                'leave_time' => '17:05:00',
                'leave_state' => '1',
                'all_situation' => 2
            ],
            [
                'student_number' => '0000003',
                'attend_time' => '10:00:00',
                'attend_state' => 4,
                'leave_time' => '17:05:00',
                'leave_state' => 1,
                'all_situation' => 1
            ],
            [
                'student_number' => '0000004',
                'attend_time' => '9:15:30',
                'attend_state' => 1,
                'leave_time' => '15:20:00',
                'leave_state' => 3,
                'all_situation' => 3
            ],
            [
                'student_number' => '0000005',
                'attend_time' => '9:30:00',
                'attend_state' => 1,
                'leave_time' => '17:05:00',
                'leave_state' => 1,
                'all_situation' => 1
            ]

        ];

        $table = $this->table('attends');
        $table->insert($data)->save();
    }
}
