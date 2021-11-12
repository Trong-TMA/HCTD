<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\excelbenhvien;
use App\Models\nguoihienmau;

use Carbon\Carbon;

class ketquaimportbenhvienController extends Controller
{
    public function getlistexcelbenhvien()
    {
        
        return excelbenhvien::get();
    }

    public function kiemtra_id2($hoten,$ngaysinh,$nhom_abo,$nhom_rh)
    {
        $date2 = Carbon::parse($ngaysinh)->format('Y/m/d');
        $id_2= $hoten.$date2.$nhom_abo;
        $id_2 = md5($id_2);
        return nguoihienmau::where([
            ['Id_2','=',$id_2]
        ])->get();
    }

    public function count_nguoimoi()
    {
        $dem = 0;
        $excel = excelbenhvien::get();
        foreach ($excel as $excel ) {
            $date2 = Carbon::parse($excel->NgaySinh)->format('Y/m/d');
            $id_2= $excel->HoTen.$date2.$excel->Nhom_ABO;
            $id_2 = md5($id_2);
            $nghien = nguoihienmau::where([
                ['Id_2','=',$id_2]
            ])->get()->count();
            if($nghien == 0)
                $dem++;
          }
          return $dem;
        
    }

    public function count_capnhat()
    {
        $dem = 0;
        $excel = excelbenhvien::get();
        foreach ($excel as $excel ) {
            $date2 = Carbon::parse($excel->NgaySinh)->format('Y/m/d');
            $id_2= $excel->HoTen.$date2.$excel->Nhom_ABO;
            $id_2 = md5($id_2);
            $nghien = nguoihienmau::where([
                ['Id_2','=',$id_2]
            ])->get()->count();
            if($nghien != 0)
                $dem++;
          }
          return $dem;
        
    }

    public function count_xuly()
    {
        $dem = 0;
        $excel = excelbenhvien::get();
        foreach ($excel as $excel ) {
            $date2 = Carbon::parse($excel->NgaySinh)->format('Y/m/d');
            $id_2= $excel->HoTen.$date2.$excel->Nhom_ABO;
            $id_2 = md5($id_2);
            $nghien = nguoihienmau::where([
                ['Id_2','=',$id_2]
            ])->get()->count();
            if($nghien >= 2)
                $dem++;
          }
          return $dem;
        
    }

    public function nguoi_xuly()
    {

        $ds =[];
        $i = 0;
        $excel = excelbenhvien::get();
        foreach ($excel as $excel ) {
            $date2 = Carbon::parse($excel->NgaySinh)->format('Y/m/d');
            $id_2= $excel->HoTen.$date2.$excel->Nhom_ABO;
            $id_2 = md5($id_2);
            $nghien = nguoihienmau::where([
                ['Id_2','=',$id_2]
            ])->get()->count();
            if($nghien >= 2){
                $ds[$i] = $excel;
                $i++;
            }
                
          }
          return $ds;
        
    }

    



    
    public function insert_nguoihienmau_1($hoten,$ngaysinh,$nghenghiep,$noilamviec,$sdt,$diachi,$solanhien,$nhom_abo,$nhom_rh)
    {
        $date2 = Carbon::parse($ngaysinh)->format('Y/m/d');
        $cmt = new nguoihienmau;
        $id_2=$hoten.$date2.$nhom_abo;
        $cmt->Id_2 = md5($id_2);
        $cmt->HoTen = $hoten;
        $cmt->NgaySinh = $date2;
        $cmt->NgheNghiep = $nghenghiep;
        $cmt->NoiLamViec = $noilamviec;
        $cmt->SDT = $sdt;
        $cmt->DiaChi = $diachi;
        $cmt->SoLanHien = $solanhien;
        $cmt->Nhom_ABO = $nhom_abo;
        $cmt->Nhom_Rh = $nhom_rh;   

        $cmt->save();

        return $cmt;
    }


    public function insert_nguoihienmau($id)
    {
        
        $nguoi = excelbenhvien::where([
            ['Id','=',$id]
        ])->get()->first();

        $hoten=$nguoi->HoTen;
        $ngaysinh=$nguoi->NgaySinh;
        $nghenghiep=$nguoi->NgheNghiep;
        $noilamviec=$nguoi->NoiLamviec;
        $sdt=$nguoi->SDT;
        $diachi=$nguoi->DiaChi;
        $solanhien=$nguoi->SoLanHien;
        $nhom_abo=$nguoi->Nhom_ABO;
        $nhom_rh=$nguoi->Nhom_Rh;


        $date2 = Carbon::parse($ngaysinh)->format('Y/m/d');
        $cmt = new nguoihienmau;
        $id_2=$hoten.$date2.$nhom_abo;
        $cmt->Id_2 = md5($id_2);
        $cmt->HoTen = $hoten;
        $cmt->NgaySinh = $date2;
        $cmt->NgheNghiep = $nghenghiep;
        $cmt->NoiLamviec = $noilamviec;
        $cmt->SDT = $sdt;
        $cmt->DiaChi = $diachi;
        $cmt->SoLanHien = $solanhien;
        $cmt->Nhom_ABO = $nhom_abo;
        $cmt->Nhom_Rh = $nhom_rh;   

        $cmt->save();

        return $cmt;

    }

    public function insert_nguoimoi_benhvien()
    {
        $excel = excelbenhvien::get();
        foreach ($excel as $excel ) {
            $date2 = Carbon::parse($excel->NgaySinh)->format('Y/m/d');
            $id_2= $excel->HoTen.$date2.$excel->Nhom_ABO;
            $id_2 = md5($id_2);
            $nghien = nguoihienmau::where([
                ['Id_2','=',$id_2]
            ])->get()->count();
            if($nghien == 0){

        
                $hoten=$excel->HoTen;
                $ngaysinh=$excel->NgaySinh;
                $nghenghiep=$excel->NgheNghiep;
                $noilamviec=$excel->NoiLamviec;
                $sdt=$excel->SDT;
                $diachi=$excel->DiaChi;
                $solanhien=$excel->SoLanHien;
                $nhom_abo=$excel->Nhom_ABO;
                $nhom_rh=$excel->Nhom_Rh;
        
        
                $date2 = Carbon::parse($ngaysinh)->format('Y/m/d');
                $cmt = new nguoihienmau;
                $id_2=$hoten.$date2.$nhom_abo;
                $cmt->Id_2 = md5($id_2);
                $cmt->HoTen = $hoten;
                $cmt->NgaySinh = $date2;
                $cmt->NgheNghiep = $nghenghiep;
                $cmt->NoiLamviec = $noilamviec;
                $cmt->SDT = $sdt;
                $cmt->DiaChi = $diachi;
                $cmt->SoLanHien = $solanhien;
                $cmt->Nhom_ABO = $nhom_abo;
                $cmt->Nhom_Rh = $nhom_rh;   
        
                $cmt->save();
                $exbv = excelbenhvien::where('Id','=',$excel->Id);
                $exbv->delete();
            }
          }
          return 1;
    }


    public function update_import_benhvien()
    {
        $excel = excelbenhvien::get();
        foreach ($excel as $excel ) {
            $date2 = Carbon::parse($excel->NgaySinh)->format('Y/m/d');
            $id_4= $excel->HoTen.$date2.$excel->Nhom_ABO.$excel->Nhom_Rh;
            $id_4 = md5($id_4);
            $nghien = nguoihienmau::where([
                ['Id_4','=',$id_4]
            ])->get();
            if($nghien->count() == 1){

                $nguoihien = nguoihienmau::where('Id','=',$nghien->first()->Id);   
                $nguoihien->update([
                     'NgheNghiep'=> $excel->NgheNghiep,
                     'NoiLamViec'=> $excel->NoiLamviec,
                     'SDT'=> $excel->SDT,
                     'DiaChi'=> $excel->DiaChi,
                     'SoLanHien'=> $excel->SoLanHien,
                ]);
                $exbv = excelbenhvien::where('Id','=',$excel->Id);
                $exbv->delete();
            }
          }
          return 1;
    }


    public function update_nguoihienmau($id_excel,$id_nguoihien)
    {
        $exbv = excelbenhvien::where('Id','=',$id_excel)->get()->first(); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
        $nguoihien = nguoihienmau::where('Id','=',$id_nguoihien);   
        $nguoihien->update([
             'NgheNghiep'=> $exbv->NgheNghiep,
             'NoiLamViec'=> $exbv->NoiLamviec,
             'SDT'=> $exbv->SDT,
             'DiaChi'=> $exbv->DiaChi,
             'SoLanHien'=> $exbv->SoLanHien,
        ]);
        $exbv = excelbenhvien::where('Id','=',$id_excel);
        $exbv->delete();
        return 1;
    }

    public function delete_excel_benhvien($id_excel)
    {
        
        $exbv = excelbenhvien::where('Id','=',$id_excel);
        $exbv->delete();
        return 1;
    }


    public function nguoihienmau_Id_4($id_4)
    {
        return nguoihienmau::where([
            ['Id_4','=',$id_4]
        ])->get();

    }

    public function nguoihienmau_Id_2($id_2)
    {
        return nguoihienmau::where([
            ['Id_2','=',$id_2]
        ])->get();

    }

    public function get_nhanvien($Id)
    {

        return nhanvien::where([
            ['ID','=',$Id],
            ['Xoa','=',0]
        ])->get()->first();

    }

    public function xoa_nhanvien($id)
    {
        $mp = nhanvien::where('ID','=',$id); //api_maphim::find(1);  ->select('Id', 'MaPhim','updated_at')
            
        $mp->update([
             'Xoa'=> 1,
             'updated_at' => new DateTime(),
        ]);
        return $mp;
    }


    public function create_nhanvien($ID,$TenNV,$GioiTinh,$CMND,$DiaChi,$SDT,$NgaySinh,$NgayBD,$Anh)
    {
        $date2 = Carbon::parse($NgaySinh)->format('Y/m/d');
        $cmt = new nhanvien;
        $cmt->ID = $ID;
        $cmt->TenNV = $TenNV;
        $cmt->GioiTinh = $GioiTinh;
        $cmt->CMND = $CMND;
        $cmt->DiaChi = $DiaChi;
        $cmt->SDT = $SDT;
        $cmt->NgaySinh = $date2;
        $cmt->NgayBD = new datetime();
        $cmt->Anh = 'anhmacdinh.jpg';
        $cmt->created_at = new datetime();

        $cmt->save();

        return $cmt;
    }


    public function get_lichsuwork($id)
    {
        return lichsuwork::where([
            ['MaNV','=',$id],
            ['Xoa','=',0]
        ])->get();
    }
}
