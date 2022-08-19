<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public $table = "modules";
    protected $fillable = [
        'moduleName', 'materi', 'idCourse', 'isSubscribe'];

    public function course(){
        return $this->belongsTo(Course::class, 'idCourse', 'id');
    }
}
