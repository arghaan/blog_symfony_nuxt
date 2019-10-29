<?php

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use YoutubeDl\Exception\CopyrightException;
use YoutubeDl\Exception\NotFoundException;
use YoutubeDl\Exception\PrivateVideoException;
use YoutubeDl\YoutubeDl;

require_once __DIR__ . '/../vendor/autoload.php';

$fs = new Filesystem();

$finder = new Finder();
$finder->files()->name('yt.txt')->in('./public/111/');
$finder->sortByName();
$dl = new YoutubeDl([
    'continue' => true, // force resume of partially downloaded files. By default, youtube-dl will resume downloads if possible.
//    'format' => 'flv',
]);

$dl->onProgress(function ($progress) {
    $percentage = $progress['percentage'];
    $size = $progress['size'];
    $speed = $progress['speed'] ?? null;
    $eta = $progress['eta'] ?? null;
    $out = "\r\e[0;36m";
    $out .= "Percentage: $percentage; Size: $size";
    if ($speed) {
        $out .= "; Speed: $speed";
    }
    if ($eta) {
        $out .= "; ETA: $eta";
    }
    echo $out;
});
foreach ($finder as $file){
    $dl->setDownloadPath(__DIR__ . '/../public/111/'.$file->getRelativePath());
    try {
        foreach (file($file->getRealPath()) as $row) {
            echo "\n\e[1;33m" . $row . "\e[1;37m";
            $video = $dl->download($row);
            echo "\n\e[1;33mName: \e[1;34m" . $video->getTitle() . "\e[1;37m";
        }
    } catch (NotFoundException $e) {
        echo "Video not found\n";
    } catch (PrivateVideoException $e) {
        echo "Video is private\n";
    } catch (CopyrightException $e) {
        echo "The YouTube account associated with this video has been terminated due to multiple third-party notifications of copyright infringement";
    } catch (\Exception $e) {
        echo "Failed to download\n";
        dump($e->getMessage());
    }
    $fs->remove($file->getRealPath());
}
echo "\n\e[0;32m==================Done===================\e[1;37m\n\n";
