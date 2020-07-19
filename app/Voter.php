<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $primaryKey = 'vote_id ';
    protected $fillable = ['user_id','product_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}

