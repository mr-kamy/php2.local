<?php

return [
    function ($article) {
        return $article->id;
    },
    function ($article) {
        return $article->title;
    },
    function ($article) {
        return $article->content;
    },
    function ($article) {
        if (isset($article->author)) {
            return $article->author->name;
        } else {
            return '';
        }
    },
];