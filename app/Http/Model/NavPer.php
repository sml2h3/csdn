<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class NavPer extends Model
{
    protected $table = "nav_permission";
    protected $primaryKey = "Id";
    public $timestamps = false;
}
