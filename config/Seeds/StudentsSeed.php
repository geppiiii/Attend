<?php
use Migrations\AbstractSeed;

/**
 * Students seed.
 */
class StudentsSeed extends AbstractSeed
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
                'student_name' => 'あああ',
                'atend_number' => '01',
                'department' => '情報工学科',
                'year' => '3',
                'class' => null
            ],
            [
                'student_number' => '0000002',
                'student_name' => 'いいい',
                'atend_number' => '02',
                'department' => '情報工学科',
                'year' => '3',
                'class' => 'A'
            ],
            [
                'student_number' => '0000003',
                'student_name' => 'ううう',
                'atend_number' => '03',
                'department' => '情報工学科',
                'year' => '3',
                'class' => 'B'
            ]
        ];

        $table = $this->table('students');
        $table->insert($data)->save();
    }
}
