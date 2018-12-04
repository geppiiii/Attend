<?php
namespace App\Shell\Task;

use Cake\Console\Shell;
use cake\ORM\TableRegistry;

/**
 * NextMonth shell task.
 */
class NextmonthTask extends Shell
{

    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     * @return \Cake\Console\ConsoleOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();

        return $parser;
    }

    /**
     * main() method.
     *
     * @return bool|int|null Success or error code.
     */
    public function main()
    {
        print('bbbb');

        $this->execNextMonth();
    }

    private function execNextMonth() {
        $studentTable = TableRegistry::get('Students');
        $student_lessonsTable = TableRegistry::get('Student_lessons');
        $students = $studentTable->find()->select(['student_number','year']);
        foreach ($students as $student) {
            $student_lesson = $student_lessonsTable->newEntity();
            $student_lesson->student_number = $student->student_number;
            $student_lesson->lete = 0;
            $student_lesson->clerk = 0;
            $student_lesson->grade = $student->year;
            $student_lesson->month = date('m');
            $student_lessonsTable->save($student_lesson);
        }

    }
}
