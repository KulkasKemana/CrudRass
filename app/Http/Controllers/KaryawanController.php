<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $karyawan = Karyawan::all();
        return view('karyawan\index',['karyawan'=>$karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nip'=>'required',
            'nama_karyawan'=>'required',
            'gaji_karyawan'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'foto'=>'required |mimes:jpeg,jpg,png,gif'
       ],[
           'nip.required'=>'Nip Wajib Diisi',
           'name_karyawan.required'=>'Wajib Isi Nama',
           'gaji_karyawan.required'=>'Gaji Anda Wajib Diisi',
           'alamat.required'=>'Wajib Mengisi Alamat',
           'jenis_kelamin.required'=>'Wajib Pilih Jenis Kelamin',
           'foto.required'=>'Foto Wajib Diisi',
           'foto.mimes'=>'Foto Diperbolehkan Berekstensi jpeg,jpg,png,gif'

       ]);
       $foto_file = $request->file('foto');
       $foto_ekstensi = $foto_file->extension();
       $foto_nama = date('ymhdis')."." .$foto_ekstensi;
       $foto_file->move(public_path('foto'),$foto_nama);

       $data =[
           'nip'=>$request->input('nip'),
           'nama_karyawan'=>$request->input('nama_karyawan'),
           'gaji_karyawan'=>$request->input('gaji_karyawan'),
           'alamat'=>$request->input('alamat'),
           'jenis_kelamin'=>$request->input('jenis_kelamin'),
           'foto'=> $foto_nama,
       ];
       Karyawan::create($data);
       return redirect('karyawan')->with('success', 'Karyawan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = Karyawan::where('nip',$id)->first();
        return view('karyawan.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nip'=>'required',
           'nama_karyawan'=>'required',
            'gaji_karyawan'=>'required',
             'alamat'=>'required',
            'jenis_kelamin'=>'required',

       ],[

           'nip.required'=>'Nip Wajib Diisi',
           'name_karyawan.required'=>'Wajib Isi Nama',
           'gaji_karyawan.required'=>'Gaji Anda Wajib Diisi',
           'alamat.required'=>'Wajib Mengisi Alamat',
           'jenis_kelamin.required'=>'Wajib Pilih Jenis Kelamin',
           'foto.mimes'=>'Foto Diperbolehkan Berekstensi jpeg,jpg,png,gif'

       ]);
       $data =[
           'nip'=>$request->nip,
           'nama_karyawan'=>$request->nama_karyawan,
           'gaji_karyawan'=>$request->gaji_karyawan,
           'alamat'=>$request->alamat,
           'jenis_kelamin'=>$request->jenis_kelamin,
       ];

       if($request->hasFile('foto')) {
            $request->validate([
                'foto'=>'mimes:jpeg,jpg,png,gif'
            ],[
                'foto.mimes'=>'Foto Yang Diperbolehkan Oleh Sistem Beresktensi jpeg,jpg,png,gif'
            ]);
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymhdis')."." .$foto_ekstensi;
            $foto_file->move(public_path('foto'),$foto_nama);

            $data_foto=Karyawan::Where('nip',$id)->first();
            File::delete(public_path('foto').'/'.$data_foto->foto);

            $data['foto']=$foto_nama;
       }
       Karyawan::where('nip',$id)->update($data);
       return redirect('karyawan')->with('success', 'Karyawan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $data=Karyawan::where('nip',$id)->first();
        File::delete(public_path('foto').'/'.$data->foto);

        Karyawan::where ('nip',$id)->delete();
        return redirect('karyawan')->with('success', 'Karyawan Berhasil Di Hapus');
    }
}
