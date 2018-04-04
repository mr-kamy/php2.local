<?php

namespace App\Models;


use App\Db;
use App\Model;

class Article extends Model
{

    public const TABLE = 'news';

    public $title;
    public $content;
    public $author_id;

    /**Получение последних qt новостей
     * @param int $qt
     * @return array
     */
    public function findLast(int $qt)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $qt;
        return $db->query($sql, [], static::class);
    }

    /**Получение автора, при его наличии
     * @param string $name
     * @return object
     */
    public function __get($name)
    {
        if ('author' == $name) {;
            if ((isset($this->author_id) && (!empty($this->author_id)))) {
                return Author::findById($this->id)->name;
            }
        }
    }


}