<?php

namespace App\Models;

use Awssat\Visits\Visits;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use CascadeSoftDeletes;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function vzt(): Visits
    {
        return visits($this);
    }
}
