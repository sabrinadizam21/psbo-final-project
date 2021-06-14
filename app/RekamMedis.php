<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    protected $table = 'rekammedis';
    protected $fillable = [ 'user_id', 'berat_badan','tekanan_darah','keluhan','diagnosis', ];

    public function user()
        {
            return $table->hasOne('\App\User');
        }

    public function userid()
        {
            return $this->belongsTo('\App\User','user_id');
        }
}
