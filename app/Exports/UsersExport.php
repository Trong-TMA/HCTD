<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\donvi;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = donvi::get();
        $data_array[] = array('Id','Tên đơn vị');
        foreach($data as $item){
            $data_array[] = array(
                'Id' => $item->Id,
                'TenDC'=>$item->TenDonVi,
            );
        }
        return (collect($data_array));
    }
    
}
