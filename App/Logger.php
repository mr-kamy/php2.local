<?php

namespace App;


class Logger
{
    protected $path = __DIR__ . '/../data/log.txt';
    protected $data;

    public function __construct()
    {
        if (file_exists($this->path)) {
            $this->data = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        } else {
            $this->data = [];
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function save()
    {
        $string = implode("\n", $this->data);
        file_put_contents($this->path, $string);
    }

    public function append(\Exception $e)
    {
        $string = date('c') . ' - ' . $e->getCode() . ' - ' . $e->getMessage() . ' - ' . $e->getFile() . ' - ' . $e->getLine();
        $this->data[] = $string;
    }


}