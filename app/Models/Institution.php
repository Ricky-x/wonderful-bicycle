<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Events\ModelsPruned;

class Institution extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'region', 'country'];
}

class Institutions extends Model {
    use HasFactory; // Omit this if you had the issue with Laragon not creating the Models directory

    protected $fillable = ['name', 'region', 'country'];
    
    public function students() {
        return $this->hasMany(Student::class); // This is an example of a relationship - an institution can have many students
    }
}