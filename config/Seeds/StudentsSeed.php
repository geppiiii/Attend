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
                'ic_number' => 'admin1',
                'department' => '情報工学科',
                'attendance_number' => 1,
                'student_name' => 'あああ',
                'attend_number' => '01',
                'department' => '情報工学科',
                'year' => '3',
                'class' => null
            ],
            [
                'student_number' => '0000002',
                'ic_number' => 'admin2',
                'department' => '情報システム専攻科',
                'attendance_number' => 10,
                'student_name' => 'いいい',
                'attend_number' => '02',
                'department' => '情報工学科',
                'year' => '3',
                'class' => 'A'
            ],
            [
                'student_number' => '0000003',
                'ic_number' => 'admin3',
                'department' => '情報システム科',
                'attendance_number' => 20,
                'student_name' => 'ううう',
                'attend_number' => '03',
                'department' => '情報工学科',
                'year' => '3',
                'class' => 'B'
            ]
        ];

        $table = $this->table('students');
        $table->insert($data)->save();
    }
}
