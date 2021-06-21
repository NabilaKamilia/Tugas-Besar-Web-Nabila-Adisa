<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $table = 'datas';
    protected $primaryKey = 'id';
    protected $increments = false;

    protected $fillable = [ 'plat_nomor', 'nama_pemilik', 'jenis_id',  'harga', 'status'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
    
}
