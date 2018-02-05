<?php

namespace Bosunski\Todo;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function category()
    {
        return $this->belongsTo('Bosunski\Todo\Category');
    }
}
