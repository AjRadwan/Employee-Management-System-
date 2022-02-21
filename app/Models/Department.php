<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
//we have a Department it has many Employee
public function department(){    
    return $this->hasmany(Department::class);
}
}
