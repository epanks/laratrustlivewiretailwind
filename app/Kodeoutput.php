<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kodeoutput extends Model
{
    protected $table = 'kodeoutput';

    public function paket()
    {
        return $this->hasMany(Paket::class, 'kdoutput', 'kdoutput');
    }
}
