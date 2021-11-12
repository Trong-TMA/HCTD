<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;

use Illuminate\Http\Request;
use App\Models\api_tonvinh;
use App\Models\api_date;
use App\Models\api_mavung;
use App\Models\nguoihienmau;
use App\Models\donvi;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class DexuattonvinhController extends Controller
{
    public function get_Muc_i($muc)
    {
        $api_mavung = api_mavung::where('Id','=',1)->get()->first();  
        $ngay = api_date::where('Id','=',1)->get()->first(); 
        $Muc = "Muc_".$muc;
        $Muc_donvi = $Muc."_donvi";
        return nguoihienmau::where([
            [$Muc,'=',$ngay->NgayTV],
            [$Muc_donvi,'=',$api_mavung->MaVung]
        ])->get();
    }

    public function Export_excel()
    {
        $data = donvi::get();
        $data_array[] = [];//array('Id','TenDV');
        foreach($data as $item){
            $data_array[] = array(
                'Id' => $item->Id,
                'TenDC'=>$item->TenDV,
            );
        }
        // return Excel::create('Customer Data', function($excel) use ($data_array){
        //     $excel->setTitle('Customer Data');
        //     $excel->sheet('Customer Data', function($sheet) use ($data_array){
        //     $sheet->fromArray($customer_array, null, 'A1', false, false);
        //     });
        // })->download('xlsx');
        return Excel::download(new UsersExport, 'orders.xlsx');

    }

    public function tonvinh_donvi($dv,$muc)
    {
        $ngay = api_date::where('Id','=',1)->get()->first(); 
        $Muc = "Muc_".$muc;
        $Muc_donvi = $Muc."_donvi";
        
        switch ($dv) {
            case '1':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',1]
                ])->get();
               break;
            case '2':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',2]
                ])->get();
                break;
            case '3':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',3]
                ])->get();
               break;
            case '4':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',4]
                ])->get();
                break;
            case '5':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',5]
                ])->get();
               break;
            case '6':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',6]
                ])->get();
                break;
            case '7':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',7]
                ])->get();
               break;
            case '8':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',8]
                ])->get();
                break;
            case '9':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',9]
                ])->get();
               break;
            case '10':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',10]
                ])->get();
                break;
            case '11':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',11]
                ])->get();
               break;
            case '12':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',12]
                ])->get();
                break;
                
            case '13':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',13]
                ])->get();
               break;
            case '14':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',14]
                ])->get();
                break;
            case '15':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',15]
                ])->get();
                break;
                
            case '16':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',16]
                ])->get();
                break;
            case '17':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',17]
                ])->get();
                break;
            case '18':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',18]
                ])->get();
                break;
            case '19':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',19]
                ])->get();
                break;
            case '20':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',20]
                ])->get();
                break;
            case '21':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',21]
                ])->get();
                break;
            case '22':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',22]
                ])->get();
                break;
            case '23':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',23]
                ])->get();
                break;
            case '24':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',24]
                ])->get();
                break;   
            case '25':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',25]
                ])->get();
                break;  
            case '26':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',26]
                ])->get();
                break;  
            case '27':
                $list_hien =  nguoihienmau::where([
                    [$Muc,'=',$ngay->NgayTV],
                    [$Muc_donvi,'=',27]
                ])->get();
                break;      
        }
        return $list_hien;
    }


}
