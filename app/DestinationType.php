<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinationType extends Model
{
    protected $table = 'destinationtypes';
    protected $primaryKey = 'destinationtype_id';

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
}
