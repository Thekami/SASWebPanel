<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clients';
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'rfc'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
