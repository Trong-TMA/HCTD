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
    
    // public function getList_nguoihienmau_donvi()
    // {
    //    return $list_hienmaudonvi = nguoihienmau::get();
    // }

    public function getList_nguoihienmau_donvi($dv)
    {
        switch ($dv) {
            case '5':
                $list_donvinguoihienmau = donvi_nguoihienmau::get();
                foreach ($donvinguoihienmau as $list_donvinguoihienmau) {
                    if($donvinguoihienmau->Id_DonVi == 5 ){
                        
                    }
                }
        }
        return $list_hienmaudonvi;
    }


}
