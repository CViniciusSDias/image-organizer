<?php
namespace CViniciusSDias\ImageOrganizer\Filesystem;

class ImageMover
{
    public function move(\SplFileInfo $image, string $baseDir): bool
    {
        $mTime = $image->getMTime();
        $dateTime = new \DateTime();
        $dateTime->setTimestamp($mTime);
        $year = $dateTime->format('Y');
        $month = $dateTime->format('m');
        $destinyDirectory = "$baseDir/$year/$month";

        if (!file_exists($destinyDirectory)) {
            mkdir($destinyDirectory, 0777, true);
        }

        return rename($image->getRealPath(), $destinyDirectory . '/' . $image->getFilename());
    }
}
