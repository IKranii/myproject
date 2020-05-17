<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    protected $table = "covid19s";

    protected $fillable = ["date","country","total","death","recovered","total_in_1m","remark"];    
    //Primary Key
 	protected $primaryKey = "id";

}
