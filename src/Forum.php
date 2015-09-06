<?php

namespace Zhibaihe\Forum;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'zhibaihe_forum_forums';

    protected $fillable = ['slug', 'openess', 'name', 'description'];
}