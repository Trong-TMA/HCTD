<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giadinhhienmau extends Model
{
    protected $table = 'giadinhhienmau';
    protected $guarded = ['Id','HoTen','NamSinh','NgheNghiep','DiaChi','SoLanHien','QuanHe','MaVung'];
}
