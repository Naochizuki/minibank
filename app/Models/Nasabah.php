<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $table = "nasabah";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'id_user', 'nama', 'alamat', 'nik', 'jenis_kelamin', 'nama_ibu', 'tgl_lahir', 'no_telp'
    ];

    public function idusers(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
