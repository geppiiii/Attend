<?php
use Migrations\AbstractSeed;

/**
 * Departments seed.
 */
class DepartmentsSeed extends AbstractSeed
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
                'department_name' => '情報工学科'
            ],
            [
                'department_name' => '情報システム専攻科'
            ],
            [
                'department_name' => '情報システム科'
            ],
            [
                'department_name' => 'プログラミング専攻科'
            ],
            [
                'department_name' => '高度ITシステム専攻科'
            ],
            [
                'department_name' => 'ネットワーク専攻科'
            ],
            [
                'department_name' => 'ネットワークエンジニア専攻科'
            ],
            [
                'department_name' => '高度ネットワークセキュリティ専攻科'
            ],
            [
                'department_name' => '電子システム専攻科'
            ],
            [
                'department_name' => '電子システムエンジニア専攻科'
            ],
            [
                'department_name' => '電子システム工学専攻科'
            ],
            [
                'department_name' => '経営ビジネス科'
            ],
            [
                'department_name' => 'ビジネスエキスパート科'
            ],
            [
                'department_name' => '情報ビジネス科'
            ],
            [
                'department_name' => '経理科'
            ],
            [
                'department_name' => '経理専攻科'
            ],
            [
                'department_name' => '国際ビジネス科'
            ],
            [
                'department_name' => 'エアライン科'
            ],
            [
                'department_name' => 'エアポート科'
            ],
            [
                'department_name' => 'ブライダル・ウエディング科'
            ],
            [
                'department_name' => 'トラベル科'
            ],
            [
                'department_name' => 'ホテル・リゾート科'
            ],
            [
                'department_name' => '海外ビジネス科'
            ],
            [
                'department_name' => '英語コミュニケーション科'
            ],
            [
                'department_name' => '製菓パティシエ科'
            ],
            [
                'department_name' => '医療秘書・事務科'
            ],
            [
                'department_name' => '診療情報管理士専攻科'
            ],
            [
                'department_name' => '診療情報管理士科'
            ],
            [
                'department_name' => 'こども未来学科'
            ],
            [
                'department_name' => '社会福祉科'
            ]

        ];

        $table = $this->table('departments');
        $table->insert($data)->save();
    }
}
