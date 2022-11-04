<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //Get All Hotels from User
    public function index() {
        return response()->json(Hotel::all());
    }

    //Get All Featured Hotels
    public function featured() {
        $hotels = Hotel::select('name','slug','country','city','rating','photos')->where('featured',1)->skip(0)->take(6)->get();
        return response()->json($hotels);
    }
}
