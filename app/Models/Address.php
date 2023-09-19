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
    protected $fillable = ['street', 'neighborhood', 'city', 'state', 'postal_code', 'country', 'address_type_id', 'client_id'];

    public function clients(){
        return $this->belongsTo(Client::class);
    }

    public function addressTypes(){
      return $this->belongsTo(AddressType::class);
    }
}
