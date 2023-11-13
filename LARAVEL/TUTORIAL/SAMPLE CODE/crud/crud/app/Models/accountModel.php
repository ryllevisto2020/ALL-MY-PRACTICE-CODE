<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accountModel extends Model
{
    use HasFactory;
    protected $fillable = [
        "name","email","password",
    ] ;
    protected $casts = [] ;
    protected $table = "account_models";
}
