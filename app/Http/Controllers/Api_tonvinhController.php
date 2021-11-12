<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\api_tonvinh;
use App\Models\api_date;
use App\Models\api_mavung;
use App\Models\nguoihienmau;
use Carbon\Carbon;
class Api_tonvinhController extends Controller
{

    public function get_tonvinh()
    {
        return api_tonvinh::get();
    }
    public function luu_api_tv($id_excel,$id_hienmau,$muctonvinh)
    {
        $api = api_tonvinh::where('Id_excel','=',$id_excel);  
        if($api != NULL)    
            $api->delete();

        $tv = new api_tonvinh;
        $tv->Id_excel = $id_excel;
        $tv->Id_hienmau = $id_hienmau;
        $tv->MucTonVinh = $muctonvinh;
        $tv->save();
        
        return $api = api_tonvinh::where('Id_excel','=',$id_excel)->get()->first();  
    }

    public function luucsdl($Id_excel)
    {
        $api = api_tonvinh::where('Id_excel','=',$Id_excel); 
        $mavung = api_mavung::where('Id','=',1)->get()->first(); 
        $ngay = api_date::where('Id','=',1)->get()->first();
        $muc = "Muc_".$api->get()->first()->MucTonVinh;
            $donvi = $muc."_donvi";
        if($api->get()->first()->MucTonVinh != 0){
            
            $nguoihienmau = nguoihienmau::where('Id','=',$api->get()->first()->Id_hienmau); 
            $nguoihienmau->update([
                $muc=> $ngay->NgayTV,
                $donvi=> $mavung->MaVung,
            ]);
            
        }
        
        $api->delete();
        return "trpmg";  
    }

    public function luucsdl_vs1()
    {
        $api = api_tonvinh::get(); 
        for($i = 0 ; $i<$api->count();$i++ ){
            $mavung = api_mavung::where('Id','=',1)->get()->first(); 
            $ngay = api_date::where('Id','=',1)->get()->first();
            if($api[$i]->get()->first()->MucTonVinh != 0){
                $muc = "Muc_".$api[$i]->get()->first()->MucTonVinh;
                $donvi = $muc."_donvi";
                $nguoihienmau = nguoihienmau::where('Id','=',$api[$i]->get()->first()->Id_hienmau); 
                $nguoihienmau->update([
                    $muc=> $ngay->NgayTV,
                    $donvi=> $mavung->MaVung,
               ]);
               $api_1 = api_tonvinh::where('Id_excel','=',$api[$i]->get()->first()->Id_excel);
               $api_1->delete();
            }
        


        }

        
        return "trpmg";  
    }




}
