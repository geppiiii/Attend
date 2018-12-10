<?php
use Migrations\AbstractSeed;

/**
 * Decisions seed.
 */
class DecisionsSeed extends AbstractSeed
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
                'judge_number' => 0,
                'description' => '出席'
            ],
            [
                'judge_number' => 1,
                'description' => '遅刻'
            ],
            [
                'judge_number' => 2,
                'description' => '欠課'
            ],
            [
                'judge_number' => 3,
                'description' => '欠席'
            ],
            [
                'judge_number' => 4,
                'description' => '無欠'
            ],
            [
                'judge_number' => 5,
                'description' => '早退'
            ],
            [
                'judge_number' => 6,
                'description' => '遅延'
            ],
            [
                'judge_number' => 7,
                'description' => '届欠'
            ],
            [
                'judge_number' => 8,
                'description' => '公欠'
            ],
            [
                'judge_number' => 9,
                'description' => '休学'
            ],
            [
                'judge_number' => 10,
                'description' => '謹慎'
            ],
            [
                'judge_number' => 11,
                'description' => '出社'
            ]
        ];

        $table = $this->table('decisions');
        $table->insert($data)->save();
    }
}
