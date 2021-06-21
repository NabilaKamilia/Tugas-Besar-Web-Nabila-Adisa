<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dashboard;

class Jenis extends Model
{
    use HasFactory;

    protected $table = 'jenis';
   

   public function datas()
   {
        return $this->hasMany(Dashboard::class);
   }

}
