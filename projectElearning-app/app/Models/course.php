<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    public $table = "courses";
    public $timestamps = false;
    protected $fillable = [
        'courseName', 'module', 'description'];
}
