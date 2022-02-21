<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

//we have a Employee and employee belongsTo admin
public function admin(){
    return $this->belongsTo(Admin::class);
 }
 

    //we have employee and employee belongs to department
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
