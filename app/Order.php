<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    
    public function orderDetail()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function statue()
    {
    }

    /**
     * 
     * 
     * @param Builder $query
     * @return Builder
     */
    public function scopeSearch(Builder $query)
    {
    }
    
    /**
     * 
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopePaied(Builder $query)
    {
    }

    use SoftDeletes;
}
