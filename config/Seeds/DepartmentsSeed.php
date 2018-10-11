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
            ]

        ];

        $table = $this->table('departments');
        $table->insert($data)->save();
    }
}
