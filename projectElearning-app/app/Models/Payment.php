<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser', 'idPacket', 'price', 'approve', 'image'
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'idUser', 'id');
    }

    public function packet(){
        return $this->belongsTo(Pricelist::class, 'idPacket', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'idUser', 'id');
    }
}
