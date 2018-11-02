<?php
use Migrations\AbstractSeed;

/**
 * StudentLessons seed.
 */
class StudentLessonsSeed extends AbstractSeed
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
                'grade' => '1',
                'month' => date('m')
            ],
            [
                'student_number' => '0000002',
                'grade' => '1',
                'month' => date('m')
            ],
            [
                'student_number' => '0000003',
                'grade' => '1',
                'month' => date('m')

            ]
        ];

        $table = $this->table('student_lessons');
        $table->insert($data)->save();
    }
}
