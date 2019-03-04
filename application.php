#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Command\SplitLanguageCommitsCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new SplitLanguageCommitsCommand());

$application->run();