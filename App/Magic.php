<?php

namespace App;


trait Magic
{
    protected $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    function __isset($name)
    {
        return isset($this->data[$name]);
    }

}