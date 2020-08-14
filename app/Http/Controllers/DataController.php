<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use App\DestinationType;
use App\User;

class DataController extends Controller
{
    public function getDestinationType()
    {
        $data = DestinationType::get();
        foreach($data as $key => $value)
        {
            $data = DestinationType::get();
        }
        return response()->json($data, 200);
    }
}
