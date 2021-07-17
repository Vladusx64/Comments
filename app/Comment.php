<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name', 'email', 'message', 'file_path', 'status',
    ];


    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }
    public function scopeConfirmed($query)
    {
        return $query->where('status', 'confirmed');
    }
    public function scopeBlocked($query)
    {
        return $query->where('status', 'blocked');
    }

}
