<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customers';

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
