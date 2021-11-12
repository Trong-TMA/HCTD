<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('de-xuat-ton-vinh');
});

Route::get('/import_benh_vien', function () {
    return view('import-benh-vien');
});

Route::get('/ket_qua_import_benh_vien_1', function () {
    return view('ket-qua-import-benh-vien');
});

Route::get('/quan_ly_import_ton_vinh', function () {
    return view('quan-ly-import-ton-vinh');
});

Route::get('/tim_kiem_thu_cong', function () {
    return view('tim-kiem-thu-cong');
});

Route::get('/ton_vinh_tu_dong', function () {
    return view('ton-vinh-tu-dong');
});

Route::get('/ton_vinh_tu_dong_vs1', function () {
    return view('ton_vinh_tu_dong_vs1');
});



// api excel bệnh viện
Route::get('getlistexcelbenhvien',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@getlistexcelbenhvien']);

Route::get('kiemtra_id2/{hoten}/{ngaysinh}/{nhom_abo}/{nhom_rh}',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@kiemtra_id4']);

Route::get('insert_nguoihienmau/{id}',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@insert_nguoihienmau']);

Route::get('insert_nguoihienmau_1/{hoten}/{ngaysinh}/{nghenghiep}/{noilamviec}/{sdt}/{diachi}/{solanhien}/{nhom_abo}/{nhom_rh}',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@insert_nguoihienmau_1']);

Route::get('count_nguoimoi',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@count_nguoimoi']);

Route::get('count_capnhat',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@count_capnhat']);

Route::get('count_xuly',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@count_xuly']);

Route::get('nguoi_xuly',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@nguoi_xuly']);

Route::get('nguoihienmau_Id_2/{id}',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@nguoihienmau_Id_2']);

Route::get('nguoihienmau_Id_4/{id}',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@nguoihienmau_Id_4']);

Route::get('list_nguoi_xuly/{id}',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@list_nguoi_xuly']);

Route::get('update_nguoihienmau/{id1}/{id2}',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@update_nguoihienmau']);

Route::get('delete_excel_benhvien/{id1}',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@delete_excel_benhvien']);

Route::get('insert_nguoimoi_benhvien',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@insert_nguoimoi_benhvien']);

Route::get('update_import_benhvien',['uses'=>'App\Http\Controllers\ketquaimportbenhvienController@update_import_benhvien']);




// api excel tôn vinh

Route::get('update_mavung/{id1}/{id2}',['uses'=>'App\Http\Controllers\quanlytonvinhController@update_mavung']);

Route::get('count_mavung/{id1}',['uses'=>'App\Http\Controllers\quanlytonvinhController@count_mavung']);


// api excel tôn vinh
Route::get('getlistexceltonvinh',['uses'=>'App\Http\Controllers\exceltonvinhController@getlistexceltonvinh']);

Route::get('getlist_nguoihienmau/{hoten}/{ngaysinh}/{nhom_abo}',['uses'=>'App\Http\Controllers\quanlytonvinhController@getlist_nguoihienmau']);

Route::get('getlist_nguoihienmau_vs1',['uses'=>'App\Http\Controllers\quanlytonvinhController@getlist_nguoihienmau_vs1']);


Route::get('tinhtrang_tonvinh/{Id}/{Muctonvinh}',['uses'=>'App\Http\Controllers\quanlytonvinhController@tinhtrang_tonvinh']);


//api đơn vị
Route::get('get_donvi',['uses'=>'App\Http\Controllers\DonviController@get_donvi']);




// api lưu mã vùng
Route::get('update_mavung/{id1}',['uses'=>'App\Http\Controllers\Api_MaVungController@update_mavung']);

Route::get('update_mavung/{id1}',['uses'=>'App\Http\Controllers\Api_MaVungController@update_mavung']);

Route::get('get_mavung',['uses'=>'App\Http\Controllers\Api_MaVungController@get_mavung']);



// api tôn vinh
Route::get('luu_api_tv/{id1}/{id2}/{id3}',['uses'=>'App\Http\Controllers\Api_tonvinhController@luu_api_tv']);

Route::get('luucsdl/{id1}',['uses'=>'App\Http\Controllers\Api_tonvinhController@luucsdl']);

Route::get('luucsdl_vs1',['uses'=>'App\Http\Controllers\Api_tonvinhController@luucsdl_vs1']);

Route::get('get_tonvinh',['uses'=>'App\Http\Controllers\Api_tonvinhController@get_tonvinh']);


//đề xuất tôn vinh

Route::get('get_Muc_i/{id1}',['uses'=>'App\Http\Controllers\DexuattonvinhController@get_Muc_i']);

Route::get('tonvinh_donvi/{id1}/{id2}',['uses'=>'App\Http\Controllers\DexuattonvinhController@tonvinh_donvi']);




// api export excel
Route::get('Export_excel',['uses'=>'App\Http\Controllers\DexuattonvinhController@Export_excel']);

// dữ liệu export
Route::get('collection',['uses'=>'App\Exports\UsersExport@collection']);


