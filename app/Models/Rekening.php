<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $table = "rekening";
    protected $primarykey = "id";
    protected $fillable = [
        'id_nasabah',
        'no_rekening',
        'saldo',
    ];

    public function idnasabah(){
        return $this->belongsTo('App\Nasabah', 'id_nasabah');
    }

    public function Transaksi() {
        return $this->hasMany('App\Transaksi', 'id_rekening', 'id');
    }
}
