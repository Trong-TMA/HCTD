<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;

use Illuminate\Http\Request;
use App\Models\nguoihienmau;
use App\Models\donvi;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class TonghoptonvinhController extends Controller
{
    

    public function getList_nguoihienmau_donvi($dv)
    {
        $donvi =  $dv;
    }


}
