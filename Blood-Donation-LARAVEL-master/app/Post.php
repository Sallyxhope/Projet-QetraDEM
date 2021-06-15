<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['title', 'description', 'phone', 'city', 'blood_volume','blood_type_needed'];
    protected $primaryKey = 'p_id';

    public function user(){ 
        return $this->belongsTo('App\User');
    }
}

