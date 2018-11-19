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
                //学籍番号
                'student_number' => '1601001',
                //カード番号
                'ic_number' => 'admin1',
                //クラス
                'department' => 1,
                // 出席番号
                'attendance_number' => 1,
                //生徒氏名
                'student_name' => '今泉俊一',
                //学年
                'year' => 3
            ],
            [
                'student_number' => '1601002',
                'ic_number' => 'admin2',
                'department' => 1,
                'attendance_number' => 2,
                'student_name' => '井本聖夜',
                'year' => 3
            ],
            [
                'student_number' => '1601003',
                'ic_number' => 'admin3',
                'department' => 1,
                'attendance_number' => 3,
                'student_name' => '上野さつき',
                'year' => 3
            ],
            [
                'student_number' => '1601030',
                'ic_number' => 'admin4',
                'department' => 1,
                'attendance_number' => 4,
                'student_name' => '岡林蓮',
                'year' => 3
            ],
            [
                'student_number' => '1601006',
                'ic_number' => 'admin5',
                'department' => 1,
                'attendance_number' => 5,
                'student_name' => '落ち幹太',
                'year' => 3
            ],
            [
                'student_number' => '1601007',
                'ic_number' => 'admin6',
                'department' => 1,
                'attendance_number' => 6,
                'student_name' => '後藤ゆうたろう',
                'year' => 3
            ],
            [
                'student_number' => '1601008',
                'ic_number' => 'admin7',
                'department' => 1,
                'attendance_number' => 7,
                'student_name' => '酒井将斗',
                'year' => 3
            ],
            [
                'student_number' => '1601010',
                'ic_number' => 'admin8',
                'department' => 1,
                'attendance_number' => 8,
                'student_name' => '椎葉太一',
                'year' => 3
            ],
            [
                'student_number' => '1501010',
                'ic_number' => 'admin9',
                'department' => 1,
                'attendance_number' => 9,
                'student_name' => '佐藤コウタ',
                'year' => 3
            ],
            [
                'student_number' => '1601011',
                'ic_number' => 'admin10',
                'department' => 1,
                'attendance_number' => 10,
                'student_name' => '田島直人',
                'year' => 3
            ],
            [
                'student_number' => '1601009',
                'ic_number' => 'admin11',
                'department' => 1,
                'attendance_number' => 11,
                'student_name' => '中西なる人',
                'year' => 3
            ],
            [
                'student_number' => '1801661',
                'ic_number' => 'admin12',
                'department' => 1,
                'attendance_number' => 12,
                'student_name' => '中村マホ子',
                'year' => 3
            ],
            [
                'student_number' => '1601014',
                'ic_number' => 'admin13',
                'department' => 1,
                'attendance_number' => 13,
                'student_name' => '林田聖夜',
                'year' => 3
            ],
            [
                'student_number' => '1601016',
                'ic_number' => 'admin14',
                'department' => 1,
                'attendance_number' => 14,
                'student_name' => '平田雄大',
                'year' => 3
            ],
            [
                'student_number' => '1601018',
                'ic_number' => 'admin15',
                'department' => 1,
                'attendance_number' => 15,
                'student_name' => '福江正弘',
                'year' => 3
            ],
            [
                'student_number' => '1601031',
                'ic_number' => 'admin16',
                'department' => 1,
                'attendance_number' => 16,
                'student_name' => '福原ひろし',
                'year' => 3
            ],
            [
                'student_number' => '1801662',
                'ic_number' => 'admin17',
                'department' => 1,
                'attendance_number' => 17,
                'student_name' => '福山ともき',
                'year' => 3
            ],
            [
                'student_number' => '1601020',
                'ic_number' => 'admin18',
                'department' => 1,
                'attendance_number' => 18,
                'student_name' => '堀口拓海',
                'year' => 3
            ],
            [
                'student_number' => '1601022',
                'ic_number' => 'admin19',
                'department' => 1,
                'attendance_number' => 19,
                'student_name' => '溝越七瀬',
                'year' => 3
            ],
            [
                'student_number' => '1801663',
                'ic_number' => 'admin20',
                'department' => 1,
                'attendance_number' => 20,
                'student_name' => '宮崎和樹',
                'year' => 3
            ],
            [
                'student_number' => '1601024',
                'ic_number' => 'admin21',
                'department' => 1,
                'attendance_number' => 21,
                'student_name' => '村瀬雄一郎',
                'year' => 3
            ],
            [
                'student_number' => '1601025',
                'ic_number' => 'admin22',
                'department' => 1,
                'attendance_number' => 22,
                'student_name' => '本山ケイタ',
                'year' => 3
            ],
            [
                'student_number' => '1601026',
                'ic_number' => 'admin23',
                'department' => 1,
                'attendance_number' => 23,
                'student_name' => '森唯斗',
                'year' => 3
            ],
            [
                'student_number' => '1601027',
                'ic_number' => 'admin24',
                'department' => 1,
                'attendance_number' => 24,
                'student_name' => '山口裕起',
                'year' => 3
            ],
            [
                'student_number' => '1601028',
                'ic_number' => 'admin25',
                'department' => 1,
                'attendance_number' => 25,
                'student_name' => '若杉輝',
                'year' => 3
            ],
            [
                'student_number' => '1601029',
                'ic_number' => 'admin26',
                'department' => 1,
                'attendance_number' => 26,
                'student_name' => '和田会と',
                'year' => 3
            ],
        ];

        $table = $this->table('students');
        $table->insert($data)->save();
    }
}
