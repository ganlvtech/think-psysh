<?php

namespace think\psysh\command;

use Psy\Shell;
use think\console\Command;
use think\console\Input;
use think\console\Output;

class PsySh extends Command
{
    protected function configure()
    {
        $this->setName('psysh')->setDescription('PsySH for ThinkPHP 5');
    }

    protected function execute(Input $input, Output $output)
    {
        $shell = new Shell();
        $shell->run();
    }
}