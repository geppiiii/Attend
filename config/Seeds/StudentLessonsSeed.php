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
                'student_number' => '0000001'
            ],
            [
                'student_number' => '0000002'
            ],
            [
                'student_number' => '0000003'
            ]
        ];

        $table = $this->table('student_lessons');
        $table->insert($data)->save();
    }
}
