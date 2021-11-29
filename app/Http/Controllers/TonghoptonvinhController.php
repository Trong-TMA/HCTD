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
            case 1:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',1)->get();
                break;
            case 2:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',2)->get();
                break;
            case 3:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',3)->get();
                break;
            case 4:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',4)->get();
                break;
            case 5:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',5)->get();
                break;
            case 6:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',6)->get();
                break;
            case 7:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',7)->get();
                break;
            case 8:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',8)->get();
                break;
            case 9:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',9)->get();
                break;
            case 10:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',10)->get();
                break;
            case 11:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',11)->get();
                break;
            case 12:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',12)->get();
                break;
            case 13:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',13)->get();
                break;
            case 14:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',14)->get();
                break;
            case 15:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',15)->get();
                break;
            case 16:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',16)->get();
                break;
            case 17:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',17)->get();
                break;
            case 18:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',18)->get();
                break;
            case 19:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',19)->get();
                break;
            case 20:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',20)->get();
                break;
            case 21:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',21)->get();
                break;
            case 22:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',22)->get();
                break;
            case 23:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',23)->get();
                break;
            case 24:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',24)->get();
                break;
            case 25:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',25)->get();
                break;
            case 26:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',26)->get();
                break;
            case 27:
                $list_donvi_nguoihienmau = nguoihienmau::where('Id_DonVi','=',27)->get();
                break;
            default:
                break;
    
        }
        return $list_donvi_nguoihienmau;
    }

    public function getList_donvi()
    {
        return $list_DonVi = donvi::get();
    }





}
