<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'service_details';

    public function service(){
      return $this->belongsTo(Service::class);
    }

    public function product(){
      return $this->belongsTo(Product::class);
    }
}
