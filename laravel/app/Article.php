<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $filable = [
        'title',
        'body'
    ];
    public function user() :BelongsTo {
        return $this->belongsTo('App\User');
    }
}
