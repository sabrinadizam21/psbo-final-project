<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekammedis';
    protected $fillable = ['id_pasien','berat_badan','tekanan_darah','keluhan','diagnosis'];
}
