<?php

namespace Bosunski\Todo;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'bosunski_tasks';
    public function category()
    {
        return $this->belongsTo('Bosunski\Todo\Category');
    }
}
