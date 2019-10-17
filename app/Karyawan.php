<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Jabatan;

use App\Divisi;

class Karyawan extends Model
{
     protected $table = 'karyawan';
     protected $fillable = ['nama_karyawan'];

    //  public function jabatan() {
    //     return $this->belongsTo('App\Jabatan', 'foreign_key', 'id');
    //   }
    public function jabatan() {
      return $this->hasOne('App\Jabatan','id', 'jabatan');
    }

    public function divisi() {
      return $this->hasOne('App\Divisi', 'id','jabatan');
    }
    //   public function divisi() {
    //     return $this->hasOne(Divisi::class);
    //   }
}
