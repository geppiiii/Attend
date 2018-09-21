<?php
use Migrations\AbstractSeed;

/**
 * Iccards seed.
 */
class IccardsSeed extends AbstractSeed
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
                'ic_number' => 'test001',
                'student_number' => '0000001'
            ],
            [
                'ic_number' => 'test002',
                'student_number' => '0000002'
            ],
            [
                'ic_number' => 'test003',
                'student_number' => '0000003'
            ]
        ];

        $table = $this->table('iccards');
        $table->insert($data)->save();
    }
}
