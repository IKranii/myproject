<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "straffs";

    protected $fillable = ["Name","Age","Salary","Phone"];    
    //Primary Key
 	protected $primaryKey = "id";
}

