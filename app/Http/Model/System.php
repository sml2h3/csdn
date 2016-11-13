<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = "system";
    protected $primaryKey = "Id";
    public $timestamps = false;
}
