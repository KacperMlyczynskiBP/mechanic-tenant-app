<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use CascadeSoftDeletes;
    use SoftDeletes;

    protected $guarded = ['id'];
//    Relacje: hasMany(ServiceAppointment)

    public function serviceAppointments(): HasMany
    {
        return $this->hasMany(ServiceAppointment::class);
    }

}
