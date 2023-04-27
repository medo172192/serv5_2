<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\SoftDeletes;
class Pro extends Model
{
    use HasFactory ;
    protected $connection = 'dummy';
    protected $table = 'dummy.dummy';
}
