<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destinations';
    protected $primaryKey = 'destination_id';

    //setiap destinasi (dimiliki oleh)/(termasuk salah satu) tipedestinasi,
    //e.g. pantai parangtritis termasuk tipedestinasi 'pantai'
    public function destinationtype()
    {
        return $this->belongsTo(DestinationType::class);
    }

    //setiap destinasi dapat di-bookmarked oleh banyak users
    public function bookmarked()
    {
        return $this->belongsToMany(User::class);
    }
}
