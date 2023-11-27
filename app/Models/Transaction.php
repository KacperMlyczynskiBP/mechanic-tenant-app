<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
use \Dyrynda\Database\Support\CascadeSoftDeletes;
class Transaction extends Model
{
    use HasFactory;
    use CascadeSoftDeletes;
    use SoftDeletes;
    protected $guarded = ['id'];

}
