<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    protected $table = "nav";
    protected $primaryKey = "Id";
    public $timestamps = false;
}
