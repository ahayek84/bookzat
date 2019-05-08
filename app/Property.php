<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected  $primaryKey = 'id';

    protected $fillable = [
        'visibility',
        'updated_by'
    ];


    public function scopeVisiable($query)
    {
        return $query->where('visibility', true);
    }

    public function scopeInvisiable($query)
    {
        return $query->where('visibility', false);
    }
}
