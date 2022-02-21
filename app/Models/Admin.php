<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // we have a admin and admin has many Emlployee and
    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
