<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $table = 'comments';

    protected $fillable =['user_id','topic_id','body'];
}
