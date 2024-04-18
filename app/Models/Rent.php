<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    protected $fillable=[
        "writer","type", "title","renter_id"
    ];

    public $timestamps=false;

    public function renter(){
        return $this->belongsTo(Renter::class);
    }
}
