<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\donvi;

use Carbon\Carbon;
class DonviController extends Controller
{
    public function get_donvi()
    {
        
        return donvi::get();
    }
}
