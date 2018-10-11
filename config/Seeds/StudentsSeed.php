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
                'department' => 1,
                // 出席番号
                'attendance_number' => 1,
                'student_name' => 'あああ',
                'year' => 3,
                'class' => null
            ],
            [
                'student_number' => '0000002',
                'ic_number' => 'admin2',
                'department' => 2,
                // 出席番号
                'attendance_number' => 10,
                'student_name' => 'いいい',
                'year' => 3,
                'class' => null
            ],
            [
                'student_number' => '0000003',
                'ic_number' => 'admin3',
                'department' => 3,
                // 出席番号
                'attendance_number' => 20,
                'student_name' => 'ううう',
                'year' => 3,
                'class' => 'A'
            ],
            [
                'student_number' => '0000004',
                'ic_number' => 'admin4',
                'department' => 3,
                // 出席番号
                'attendance_number' => 20,
                'student_name' => 'えええ',
                'year' => 3,
                'class' => 'B'
            ],
            [
                'student_number' => '0000005',
                'ic_number' => 'admin4',
                'department' => 1,
                // 出席番号
                'attendance_number' => 21,
                'student_name' => 'おおお',
                'year' => 3,
                'class' => null
            ]
        ];

        $table = $this->table('students');
        $table->insert($data)->save();
    }
}
