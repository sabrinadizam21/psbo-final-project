<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function dashboard()
    {
    	return view('staff.dashboard-staff');
    }

    // JADWA DOKTER
    public function jadwal_dokter()
    {
    	$jadwal_dokter = \App\JadwalDokter::all();
    	return view('staff.jadwal-dokter', ['jadwal_dokter' => $jadwal_dokter]);
    }

    public function jadwal_dokter_tambah()
    {
    	$dokter = \App\Dokter::all();
    	return view('staff.tambah-jadwal-dokter', ['dokter' => $dokter]);
    }

    public function jadwal_dokter_create(Request $request)
    {
    	\App\JadwalDokter::create($request->all());
    	return redirect('/admin/jadwal-dokter')->with('sukses', 'Data berhasil di simpan');
    }

    public function jadwal_dokter_edit($id)
    {
    	$edit_jadwal = \App\JadwalDokter::find($id);
    	return view('staff.edit-jadwal-dokter',['edit_jadwal' => $edit_jadwal]);
    }

    public function jadwal_dokter_update(Request $request, $id)
    {
    	$edit_jadwal = \App\JadwalDokter::find($id);
    	$edit_jadwal->update($request->all());
    	return redirect('/admin/jadwal-dokter')->with('sukses', 'Data berhasil di update');
    }

    public function jadwal_dokter_delete($id)
    {
    	$edit_jadwal = \App\JadwalDokter::find($id);
    	$edit_jadwal->delete();
    	return redirect('/admin/jadwal-dokter')->with('sukses', 'Data berhasil di hapus');
    }

    public function rekam_medis_daftar()
    {
    	return view('staff.daftar-rekam-medis');
    }

    public function rekam_medis_individu()
    {
    	return view('staff.rekam-medis-individu');
    }

    public function rekam_medis_tambah()
    {
    	return view('staff.tambah-rekam-medis');
    }

    public function rekam_medis_edit()
    {
    	return view('staff.edit-rekam-medis');
    }
}
