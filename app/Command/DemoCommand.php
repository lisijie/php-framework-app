<?php
namespace App\Command;

use Core\Command;

class DemoCommand extends Command
{
    public function testAction()
    {
        \App::logger()->debug("debug...");
        \App::logger()->info("info...");
    }
}
