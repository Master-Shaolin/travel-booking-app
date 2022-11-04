<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //Get All Featured Activities
    public function featured() {
        $activities = Activity::select('name','slug','city','rating','thumbnail','duration','max_people','price')->where('featured',1)->skip(0)->take(6)->get();
        return response()->json($activities);
    }
}
