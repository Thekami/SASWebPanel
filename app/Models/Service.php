<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'services';
    protected $fillable = ['observation', 'total', 'client_id', 'service_type_id', 'service_status_id'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function serviceDetail(){
        return $this->hasMany(ServiceDetail::class);
    }

    public function serviceType(){
        return $this->belongsTo(ServiceType::class);
    }

    public function serviceStatus(){
        return $this->belongsTo(ServiceStatus::class);
    }
}