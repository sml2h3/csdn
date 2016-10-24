<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = "phone_code";
    protected $primaryKey = "Id";
    public $timestamps = false;
}
