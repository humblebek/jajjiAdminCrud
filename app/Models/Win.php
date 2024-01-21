<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Win extends Model
{
    use HasFactory;

    protected $fillable = ['photo','title','message'];

     protected $guarded = ['id','_token'];


    protected $table = 'wins';
}
