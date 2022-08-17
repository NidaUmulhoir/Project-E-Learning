<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser', 'idCourse', 'idModule'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'idUser', 'id');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'idCourse', 'id');
    }

    public function module(){
        return $this->belongsTo(Module::class, 'idModule', 'id');
    }
}
