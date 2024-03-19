<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orderlists(){
        return $this->hasMany(orderList::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    protected $fillable = ['user_id','status_id'];
}
