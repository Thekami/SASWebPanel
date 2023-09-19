<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressType extends Model
{
    use HasFactory;

    protected $table = 'address_types';
    protected $fillable = ['name'];

    public function addresses(){
      return $this->hasMany(Service::class);
    }
}
