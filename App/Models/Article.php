<?php

namespace App\Models;


use App\Db;
use App\Model;

class Article extends Model
{

    public const TABLE = 'news';

    public $title;
    public $content;

    public function findLast(int $qt)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $qt;
        return $db->query($sql, [], static::class);
    }

}