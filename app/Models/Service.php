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
    protected $guarded = [];

    public function client(){
        return $this->belongsTo(Customer::class);
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

    public function branchOffice(){
        return $this->belongsTo(BranchOffice::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}