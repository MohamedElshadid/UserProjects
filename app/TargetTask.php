<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetTask extends Model
{
    public $table = 'targettasks';
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
