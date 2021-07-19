<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table    = 'nilai';
    protected $fillable = ['mahasiswa_id', 'makul_id', 'nilai'];
    public $timestamps  = false;

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }
    public function makul(){
        return $this->belongsTo(Makul::class, 'makul_id', 'id');
    }
}