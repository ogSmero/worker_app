<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'workers';
    protected $guarded = false;

    public function profile()
    {
        return $this->hasOne(Profile::class, 'worker_id', 'id');
    }
}
