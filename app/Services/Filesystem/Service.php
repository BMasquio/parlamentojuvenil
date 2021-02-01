<?php

namespace App\Services\Filesystem;

use Storage;
use League\Flysystem\Plugin\ListFiles;

class Service
{
    /**
     * @var \Illuminate\Contracts\Filesystem\Filesystem
     */
    protected $filesystem;

    public function __construct()
    {
        $this->initialize();
    }

    public function getBaseDir()
    {
        return env('BASE_DIR');
    }

    protected function initialize()
    {
        $this->filesystem = Storage::disk('public');

        $this->filesystem->addPlugin(new ListFiles());
    }

    public function __call($name, $arguments)
    {
        $arguments = !is_array($arguments) ? [$arguments] : $arguments;

        return call_user_func_array([$this->filesystem, $name], $arguments);
    }

    public function allFiles($from)
    {
        return $this->filesystem->files($from);
    }

    public function allLinks($from)
    {
        $files = $this->filesystem->allFiles(
            $this->getBaseDir() . DIRECTORY_SEPARATOR . $from
        );

        $links = [];

        foreach ($files as $key => $file) {
            $links[$key] = url(
                env('LOCAL_BASE_DIR') . DIRECTORY_SEPARATOR . $file
            );

            $files[$key] =
                $this->filesystem
                    ->getDriver()
                    ->getAdapter()
                    ->getPathPrefix() . $files[$key];
        }

        return ['files' => $files, 'links' => $links];
    }

    public function congressmenLinks($path)
    {
        $congressmen = $this->allLinks($path)['links'];

        asort($congressmen);

        return $this->extractCongressmenInfo($congressmen);
    }

    public function extractCongressmenInfo($congressmen)
    {
        foreach ($congressmen as $key => $person) {
            list($name, $city) = $this->parseNameAndCity($person);

            $congressmen[$key] = [
                'url' => $person,
                'name' => $name,
                'city' => $city,
            ];
        }

        return $congressmen;
    }

    protected function parseNameAndCity($file)
    {
        $file = pathinfo($file);

        $file = explode('-', $file['filename']);

        return [trim($file[0]), trim($file[1])];
    }
}
