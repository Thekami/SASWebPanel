<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchProduct extends Model
{
    use HasFactory;
    protected $table = 'branch_products';

    public function branchOffice(){
        return $this->belongsTo(BranchOffice::class);
    }

    public function product(){
      return $this->belongsTo(Product::class);
    }
}
