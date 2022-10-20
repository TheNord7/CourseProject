<?php

namespace App\Posts;

use App\User\User;

class Posts
{
public function __construct(
private Name $author,
private string $text
) {
}
public function __toString()
{
return $this->author . ' пишет: ' . $this->text;
}
}