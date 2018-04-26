<?php

namespace App\Models;

use App\Db;
use App\Model;
use Kamc\MultiException\MultiException;

class Article extends Model
{

    public const TABLE = 'news';

    public $title;
    public $content;
    public $author_id;

    /**
     * Получение автора, при его наличии
     * @param string $name
     * @return object
     */
    public function __get($name)
    {
        if ('author' == $name) {
            ;
            if (!empty($this->author_id)) {
                return Author::findById($this->author_id);
            }
        }
    }

    function __isset($name)
    {
        if ('author' == $name) {
            return isset($this->author_id);
        }
    }

    public function fill(array $data = [])
    {

        $errors = new MultiException();
        if (empty($data['title'])) {
            $errors->add(new \Exception('Заголовок пустой'));
        }
        if (empty($data['content'])) {
            $errors->add(new \Exception('Отсутствует текст новости'));
        }
        if (!$errors->empty()) {
            throw $errors;
        } else {
            $this->title = $data['title'];
            $this->content = $data['content'];
        }
    }
}