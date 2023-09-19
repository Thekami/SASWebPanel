<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceStatus extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'service_statuses';
    protected $fillable = ['name'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
