<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\exceltonvinh;
use App\Models\nguoihienmau;
use App\Models\api_mavung;

use Carbon\Carbon;

class quanlytonvinhController extends Controller
{
    public function update_mavung($mavung,$tenfile)
    {
        $list = exceltonvinh::where([
            ['TenFile','=',$tenfile]
        ])->get();
        foreach ($list as $list ) {
            $ex = exceltonvinh::where('Id','=',$list->Id);   
                $ex->update([
                     'MaVung'=> $mavung,
                ]);
          }
        return 1;
    }

    public function count_mavung($mavung)
    {
        
        $exbv = exceltonvinh::where('MaVung','=',$mavung)->get();
        if($exbv->count() == 0)
            return 0;
        return $exbv;
    }

    public function getlist_nguoihienmau($hoten,$ngaysinh,$nhom_ABO)
    {
        $exbv = exceltonvinh::get();
        if($exbv->count() == 0)
            return 0;
        $list = [];
        for($i=0;$i< $exbv->count();$i++){
            $date2 = Carbon::parse($ngaysinh)->format('Y/m/d');
            $id_2=md5($hoten.$date2.$nhom_ABO);
            $us = nguoihienmau::where('Id_2','=',$id_2)->get();
            $list[$i]= [$exbv[$i],$us];
        }
        
        return $list;
        
    }

    public static function tinhtrang_tonvinh_vs1($Id,$muctonvinh)
    {
        $tonvinh = nguoihienmau::where('Id','=',$Id)->get()->first();
        if($tonvinh->SoLanHien < $muctonvinh)
            return 0;
        for($i=5;$i<=$muctonvinh;$i+=5){
            $muctv = "Muc_".$i;
            if($muctonvinh == $tonvinh->$muctv && $tonvinh->$muctv != null)
                return 0;
            if($muctonvinh == $tonvinh->$muctv && $tonvinh->$muctv == null)
                return $muctonvinh;
                
            if($i == $muctonvinh && $tonvinh->$muctv == null)
                return $i;
            if($i == $muctonvinh && $tonvinh->$muctv != null)
                return 0;
            
            if($tonvinh->$muctv == null)
                return $i;
            if($i>=20)
                $i+=5;
            

        }
        
    }
    
    public function getlist_nguoihienmau_vs1()
    {
        $mavung = api_mavung::where('Id','=',1)->get()->first()->MaVung;
        $exbv = exceltonvinh::where('MaVung','=',$mavung)->get();
        if($exbv->count() == 0)
            return 0;
        $list = [];
        for($i=0;$i< $exbv->count();$i++){
            $hoten= $exbv[$i]->HoTen;
            $ngaysinh=$exbv[$i]->NgaySinh;
            $date = Carbon::parse($ngaysinh)->format('Y/m/d');
            $nhom_ABO=$exbv[$i]->Nhom_ABO;
            $id_2=md5($hoten.$date.$nhom_ABO);
            // return $id_2;
            $us = nguoihienmau::where('Id_2','=',$id_2)->get();
            $list_1 = [];
            // return $us;
            for($j=0;$j< $us->count();$j++){
                // $tinhtrang = tinhtrang_tonvinh_vs1($us[$j]->Id,$exbv[$i]->MucTonVinh);
                $Id = $us[$j]->Id;
                $muctonvinh =$exbv[$i]->MucTonVinh;
                $tonvinh = nguoihienmau::where('Id','=',$Id)->get()->first();
             
            //    return $tonvinh->SoLanHien < $muctonvinh;
                if($tonvinh->SoLanHien < $muctonvinh){
                    // return 0;
                    $tinhtrang = 0;
                    $mautonvinh = "red_circle_48px.png";
                }
                else{
                    for($k=5;$k<=$muctonvinh;$k+=5){
                        $muctv = "Muc_".$k;
                        if($muctonvinh == $tonvinh->$muctv && $tonvinh->$muctv != null){
                            // return 0;
                            $tinhtrang = 0;
                             
                            $mautonvinh = "red_circle_48px.png";
                            break;
                        }
                        if($muctonvinh == $tonvinh->$muctv && $tonvinh->$muctv == null){
                            // return $muctonvinh;
                            $tinhtrang = $muctonvinh;
                            
                            $mautonvinh = "green_circle_48px.png";
                            break;
                        }
                    
                        if($k == $muctonvinh && $tonvinh->$muctv == null){
                            $tinhtrang = $k;
                            
                            $mautonvinh = "green_circle_48px.png";
                            break;
                        }
                        if($k == $muctonvinh && $tonvinh->$muctv != null){
                            $tinhtrang = 0;
                            
                            $mautonvinh = "red_circle_48px.png";
                            break;
                        }
                
                        if($tonvinh->$muctv == null){
                            $tinhtrang = $k;
                            
                            $mautonvinh = "yellow_circle_48px.png";
                            break;
                        }
                        if($k>=20)
                            $k+=5;
            

                    }

                }
                $list_1[$j] = ["nguoihienmau"=>$us[$j],"TinhTrang"=>$tinhtrang,"MauTonVinh"=>$mautonvinh];
               
            }
            $list[$i]= ["excel_tonvinh"=>$exbv[$i],"list_hienmau"=>$list_1];
        }
        
        return $list;
        
    }


    public function tinhtrang_tonvinh($Id,$muctonvinh)
    {
        $tonvinh = nguoihienmau::where('Id','=',$Id)->get()->first();
        if($tonvinh->SoLanHien < $muctonvinh)
            return 0;
        for($i=5;$i<=$muctonvinh;$i+=5){
            $muctv = "Muc_".$i;
            if($muctonvinh == $tonvinh->$muctv && $tonvinh->$muctv != null)
                return 0;
            if($muctonvinh == $tonvinh->$muctv && $tonvinh->$muctv == null)
                return $muctonvinh;
                
            if($i == $muctonvinh && $tonvinh->$muctv == null)
                return $i;
            if($i == $muctonvinh && $tonvinh->$muctv != null)
                return 0;
            
            if($tonvinh->$muctv == null)
                return $i;
            if($i>=20)
                $i+=5;
            

        }
        
    }
}
