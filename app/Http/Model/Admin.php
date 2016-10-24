<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = "Id";
    protected $table = "admin";
    public $timestamps = false;
}
