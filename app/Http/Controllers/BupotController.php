<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BupotController extends Controller
{
    public function index(){
        return view('pages.bupot');
    }

    public function create(){
        return view ('pages.create');
    }

    public function generate(Request $request){

        $request->validate([
            'nama_wajib_pajak' => 'required|string',
            'npwp_pemotong' => 'required|string',
            'jenis_pajak' => 'required|string',
            'tahun_pajak' => 'required|string',
            'masa_pajak' => 'required|string',
            'tanggal_pemotongan' => 'required|string',
        ]);

        $nama_wajib_pajak = $request->input('nama_wajib_pajak');
        $npwp_pemotong = $request->input('npwp_pemotong');
        $jenis_pajak = $request->input('jenis_pajak');
        $tahun_pajak = $request->input('tahun_pajak');
        $masa_pajak = $request->input('masa_pajak');
        $tanggal_pemotongan = $request->input('tanggal_pemotongan');

        return view('pages.create', compact('nama_wajib_pajak', 'npwp_pemotong', 'jenis_pajak', 'tahun_pajak', 'masa_pajak', 'tanggal_pemotongan'));
    }


}
