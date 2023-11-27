<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
//    Relacje: hasMany(ServiceAppointment)

    public function serviceAppointments(): HasMany
    {
        return $this->hasMany(ServiceAppointment::class);
    }

}
