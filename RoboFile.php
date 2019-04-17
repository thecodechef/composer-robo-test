<?php

class Robofile extends \Robo\Tasks
{

    function styles()
    {
        $this->_exec('sass src/sass/test.sass:dist/css/test.css');
        $this->_exec('tsc src/ts/test.ts --outDir dist/js');
    }

    function push_to_github(string $commit = "")
    {
        $this->taskGitStack()
          ->stopOnFail()
          ->add('-A')
          ->commit($commit)
          ->push('origin', 'master')
          ->run();
    }
}
?>
