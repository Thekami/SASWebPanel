<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'addresses';

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function addressTypes(){
      return $this->belongsTo(AddressType::class);
    }
}
