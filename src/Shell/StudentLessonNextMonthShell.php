<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Log\Log; 
use Cake\Controller\Component; 
use Cake\Controller\ComponentRegistry; 
use App\Controller\Component\CommonComponent; 

/**
 * StudentLessonNextMonthShell shell command.
 */
class StudentLessonNextMonthShell extends Shell
{
    public $tasks = ['Nextmonth'];

    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     *
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
        print('aaaa');

        // $this->out($this->OptionParser->help());
        $this->Nextmonth->main();
    }
}
