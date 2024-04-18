<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "born"
    ];

    public $timestamps = false;

    public function rent(){
        return $this->hasMany(Rent::class);
    }
}
