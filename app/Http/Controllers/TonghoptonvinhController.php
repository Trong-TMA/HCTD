<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;

use Illuminate\Http\Request;
use App\Models\nguoihienmau;
use App\Models\donvi;
use App\Models\donvi_nguoihienmau;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class TonghoptonvinhController extends Controller
{
    

    public function getList_nguoihienmau_donvi($dv)
    {
        switch ($dv) {
            case 5:
                $list_donvi_nguoihienmau = donvi_nguoihienmau::where('Id_DonVi','=',5)->get();
                break;
        }
        return $list_donvi_nguoihienmau;
    }

    public function getList_nguoihienmau()
    {
      return  $list_nguoihienmau = nguoihienmau::get();   
    }




}
