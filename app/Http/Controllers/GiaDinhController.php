<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\giadinhhienmau;

use Carbon\Carbon;

class GiaDinhController extends Controller
{
    public function get_giadinhhienmau()
    {
        
        return giadinhhienmau::get();
    }
    public function uploadEntry(Request $request){
        //laravel form submission
        /*  
        if($request->hasFile('uploadedFile')){
          $files = $request->file('uploadedFile');
          foreach ($files as $file) {  
              $fileName = rand(11111,99999).'.jpg';
              $file->move( 'uploads' , $fileName);
          }
        } */
  
        //angular API submission
  
        $file = 0; 
        while (Input::file($file)->isValid()) {
            $destinationPath = 'uploads'; // upload path
            $fileName =  rand(11111,99999).'.jpg'; // renameing image
            Input::file($file)->move($destinationPath, $fileName); // uploading file to given path
            $file++;
        }
    }  
}
