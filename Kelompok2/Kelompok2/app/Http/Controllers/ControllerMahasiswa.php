<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class ControllerMahasiswa extends Controller
{
   
    public function create(Request $request)
    {
        $data = $request->all();
        $tabel_mahasiswa = Mahasiswa::create($data);

        return response()->json($tabel_mahasiswa);
    }

    public function index()
    {
        $tabel_mahasiswa = Mahasiswa::all();
        return response()->json($tabel_mahasiswa);
    }

    public function detail($id)
    {
        $tabel_mahasiswa = Mahasiswa::find($id);
        return response()->json($tabel_mahasiswa);
    }

    public function update(Request $request, $id)
    {
        $tabel_mahasiswa = Mahasiswa::whereId($id)->update([
            'prodi_tujuan' => $request->input('prodi_tujuan'),
            'nama_mahasiswa' => $request->input('nama_mahasiswa'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'agama' => $request->input('agama'),
            'alamat_mahasiswa' => $request->input('alamat_mahasiswa'),
            'no_telepon' => $request->input('no_telepon'),
            'email' => $request->input('email'),
            
        ]);

        if($tabel_mahasiswa){
            return response()->json([
                'succes'   => true,
                'message'  => 'Data berhasil diupdate',
                'data'     => $tabel_mahasiswa,
            ],201);
        } else{
            return response()->json([
                'succes'  => false,
                'message'  => 'Data Gagal diupdate',
            ],400);
        }
    }

    public function delete($id)
    {
        $tabel_mahasiswa = Mahasiswa::whereId($id)->first();
        $tabel_mahasiswa->delete();

        if($tabel_mahasiswa)
        {
            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus'
            ],200);
        }
    }

    
}
