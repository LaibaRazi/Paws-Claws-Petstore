<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $table='Supplies';
    protected $PrimaryKey='ID';
    use HasFactory;
}
