<?php

namespace App;


class AdminDataTable
{
    protected $models;
    protected $functions;

    public function __construct(array $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }

    public function render()
    {
        $arr = [];
        foreach ($this->models as $val) {

            foreach ($this->functions as $func){
                var_dump($func($val));

        }
    }
    //return $arr;
}

}