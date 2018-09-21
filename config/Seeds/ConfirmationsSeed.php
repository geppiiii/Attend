<?php
use Migrations\AbstractSeed;

/**
 * Confirmations seed.
 */
class ConfirmationsSeed extends AbstractSeed
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
                'atend' => '1',
                'lesson_A' => '1',
                'lesson_B' => '1',
                'lesson_C' => '1',
                'lesson_D' => '1',
                'leave' => '1',
                'judge' => '1'
            ],
            [
                'student_number' => '0000002',
                'atend' => '1',
                'lesson_A' => '1',
                'lesson_B' => '1',
                'lesson_C' => '1',
                'lesson_D' => '1',
                'leave' => '1',
                'judge' => '1'
            ],
            [
                'student_number' => '0000003',
                'atend' => '1',
                'lesson_A' => '1',
                'lesson_B' => '1',
                'lesson_C' => '1',
                'lesson_D' => '1',
                'leave' => '1',
                'judge' => '1'
            ]
        ];

        $table = $this->table('confirmations');
        $table->insert($data)->save();
    }
}
