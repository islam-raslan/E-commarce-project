<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'customers';
    protected $timestamp = true;
    use HasFactory;
}
