<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $primarykey = "id";
    protected $fillable = [
        'id_rekening',
        'tgl_transaksi',
        'jenis_transaksi',
        'nominal',
    ];

    public function idusers(){
        return $this->belongsTo('App\Rekening', 'id_rekening');
    }
}
