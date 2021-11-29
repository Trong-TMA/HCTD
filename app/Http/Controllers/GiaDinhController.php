<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\giadinhhienmau;

use Carbon\Carbon;

class GiaDinhController extends Controller
{
    public function get_giadinhhienmau()
    {
        
        return giadinhhienmau::get();
    }
}
