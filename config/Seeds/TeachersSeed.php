<?php
use Migrations\AbstractSeed;

/**
 * Teachers seed.
 */
class TeachersSeed extends AbstractSeed
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
                'username' => 'admin',
                'password' => '0001',
                'role' => '',
                'created' => '2018-11-11 7:00:00'
            ]
        ];

        $table = $this->table('teachers');
        $table->insert($data)->save();
    }
}
