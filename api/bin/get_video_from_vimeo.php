<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

$fs = new Filesystem();

$finder = new Finder();
$finder->files()->name('yt.txt')->in('./public/111/');
$finder->sortByName();

foreach ($finder as $file) {
    foreach (file($file->getRealPath()) as $row) {
        passthru('youtube-dl -o "'.__DIR__ . '/../public/111/'.$file->getRelativePath().'/%(title)s.%(ext)s" --referer http://revitonica.ru "'.$row.'"');
    }
//    $fs->remove($file->getRealPath());
}
