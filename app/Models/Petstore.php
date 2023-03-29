<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petstore extends Model
{
    protected $table='petstore';
    protected $PrimaryKey='Id_pet';
    use HasFactory;
}
