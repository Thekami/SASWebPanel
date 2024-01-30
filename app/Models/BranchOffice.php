<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BranchOffice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'branch_offices';

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function service(){
      return $this->hasMany(Service::class);
    }

    public function branchProduct(){
      return $this->hasMany(BranchProduct::class);
    }
}
