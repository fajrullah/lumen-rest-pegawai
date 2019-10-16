<?php

namespace App\Http\Controllers;

use App\Divisi;

use App\Jabatan;

use App\Karyawan;

use Illuminate\Http\Request;

class ExampleController extends Controller
{   

    public function index(){
        $data = Divisi::all();
        return response($data);
    }

    public function getAllDivisi(){
        $data = Divisi::all();
        return response($data);
    }

    public function getAllJabatan(){
        $data = Jabatan::all();
        return response($data);
    }

    public function getAllKaryawan(){
        $data = Karyawan::all();
        return response($data);
    }
    
    public function getDetailDivisi($id){
        $data = Divisi::where('id',$id)->get();
        return response ($data);
    }

    public function getDetailKaryawan($id){
        $data = Karyawan::where('id',$id)->get();
        return response ($data);
    }

    public function getDetailJabatan($id){
        $data = Jabatan::where('id',$id)->get();
        return response ($data);
    }
    
    public function saveDataJabatan(Request $request){
        $data = new Jabatan();
        $data->nama_jabatan = $request->input('nama_jabatan');
        $data->save();
        return response('Success');
    }

    public function saveDataDivisi(Request $request){
        $data = new Divisi();
        $data->nama_divisi = $request->input('nama_divisi');
        $data->save();
    
        return response('Success');
    }

    public function saveDataKaryawan(Request $request){
        $data = new Karyawan();
        $data->nama_karyawan = $request->input('nama_karyawan');
        $data->save();
    
        return response('Success');
    }

    public function updateDataKaryawan(Request $request, $id){
        $data = Karyawan::where('id',$id)->first();
        $data->nama_karyawan = $request->input('nama_karyawan');
        $data->save();
    
        return response('Success');
    }

    public function updateDataDivisi(Request $request, $id){
        $data = Divisi::where('id',$id)->first();
        $data->nama_divisi = $request->input('nama_divisi');
        $data->save();
    
        return response('Success');
    }

    public function updateDataJabatan(Request $request, $id){
        $data = Jabatan::where('id',$id)->first();
        $data->nama_jabatan = $request->input('nama_jabatan');
        $data->save();
    
        return response('Success');
    }
    
    public function destroyDataKaryawan($id){
        $data = Karyawan::where('id',$id)->first();
        $data->delete();
    
        return response('Success');
    }

    public function destroyDataJabatan($id){
        $data = Jabatan::where('id',$id)->first();
        $data->delete();
    
        return response('Success');
    }

    public function destroyDataDivisi($id){
        $data = Divisi::where('id',$id)->first();
        $data->delete();
    
        return response('Success');
    }
}
