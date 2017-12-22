<?php
namespace CViniciusSDias\ImageOrganizer\Filesystem;

use Symfony\Component\Finder\Finder;

class ImageFinder
{
    /**
     * @var Finder
     */
    private $finder;

    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
    }

    public function find(string $directory): Finder
    {
        return $this->finder
            ->files()
            ->in($directory)
            ->filter(function (\SplFileInfo $file) {
                $mime = mime_content_type($file->getRealPath());

                return stripos($mime, 'image') === 0;
            })
            ->sortByModifiedTime();
    }
}
