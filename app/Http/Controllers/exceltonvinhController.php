<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\exceltonvinh;
use App\Models\nguoihienmau;

use Carbon\Carbon;

class exceltonvinhController extends Controller
{
    public function getlistexceltonvinh()
    {
        
        return exceltonvinh::get();
    }
}
