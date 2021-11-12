<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\api_mavung;
class Api_MaVungController extends Controller
{
    
    public function update_mavung($mavung)
    {
        $api = api_mavung::where('Id','=',1);   
        $api->update([
             'MaVung'=> $mavung,
        ]);
        return api_mavung::where('Id','=',1)->get();
    }

    public function get_mavung()
    {
       return api_mavung::where('Id','=',1)->get()->first();  
    }
}
