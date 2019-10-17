<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Karyawan;

class Jabatan extends Model
{
     protected $table = 'jabatan';
     protected $fillable = ['nama_jabatan'];

    //  public function karyawan() {
    //     return $this->hasOne('App\Karyawan', 'foreign_key', 'id');
    //   }
    
    
}
