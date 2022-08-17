<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public $table = "courses";
    // public $timestamps = false;
    protected $fillable = [
        'courseName', 'module', 'description', 'image'];

    public function modules(){
        return $this->HasMany(Module::class, 'idCourse', 'id');
    }
}
