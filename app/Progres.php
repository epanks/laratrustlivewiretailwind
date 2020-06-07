<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    protected $table = 'progres';
    protected $fillable = [
        'keuangan', 'fisik', 'paket_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
