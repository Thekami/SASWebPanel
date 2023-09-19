<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'service_types';
    protected $fillable = ['name'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
