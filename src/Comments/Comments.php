<?php

namespace App\Comments;

use App\User\User;
use App\Posts\Posts;

class Comments 
{
    public function __construct(
        private Name $author,
        private Posts $post,
        private srting $text
    ) {
    }

    public function __toString()
    {
    return $this->post . $this->author . ' комментирует: ' . $this->text;
    }
}
