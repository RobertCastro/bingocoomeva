<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    // protected $table = "data";

    public $fillable = ['id', 'name', 'dni', 'last_table'];
    // protected $attributes = [
    //     'delayed' => false,
    // ];
}
