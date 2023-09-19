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
    protected $fillable = ['concept', 'cost', 'service_id', 'product_id', 'product_quantity'];

    public function services(){
      return $this->belongsTo(Service::class);
    }
}
