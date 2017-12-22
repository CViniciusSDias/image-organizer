<?php
require_once __DIR__ . '/vendor/autoload.php';

use CViniciusSDias\ImageOrganizer\Command\OrganizeCommand;
use CViniciusSDias\ImageOrganizer\Filesystem\ImageFinder;
use CViniciusSDias\ImageOrganizer\Filesystem\ImageMover;
use Symfony\Component\Console\Application;
use Symfony\Component\Finder\Finder;

$app = new Application();

$organizeCommand = new OrganizeCommand(new ImageFinder(new Finder()), new ImageMover());

$app->add($organizeCommand);
$app->setDefaultCommand($organizeCommand->getName(), true);

$app->run();
