<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jenis;
use App\Models\Area;
use App\Models\Kendaraan;
use App\Models\Transaksi;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    
     public function data_kendaraan()
     {
        $no = 1;
        $data_kendaraan = DB::table('kendaraan')
                    ->select('kendaraan.*', 'jenis.nama as jenis_kendaraan')
                    ->join('jenis', 'jenis.id', '=', 'kendaraan.jenis_kendaraan_id')
                    ->orderBy('kendaraan.id', 'desc')
                    ->get();
        return view('cms.data_kendaraan.index', compact('no', 'data_kendaraan'));
     }
    
     public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kendaraan::create([
            'merk' => $request->merk,
            'pemilik' => $request->pemilik,
            'nopol' => $request->nopol,
            'thn_beli' => $request->thn_beli,
            'deskripsi' => $request->deskripsi,
            'jenis_kendaraan_id' => $request->jenis_kendaraan_id,
            'kapasitas_kursi' => $request->kapasitas_kursi,
            'rating' => $request->rating
        ]);

        return redirect('/cms/data_kendaraan')->with('status', 'Data user berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_kendaraan = DB::table('kendaraan')
                    ->select('kendaraan.*', 'jenis.nama as jenis_kendaraan')
                    ->join('jenis', 'jenis.id', '=', 'kendaraan.jenis_kendaraan_id')
                    ->where('kendaraan.id', $id)
                    ->first();
        return response()->json($data_kendaraan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_kendaraan = DB::table('kendaraan')
        ->select('kendaraan.*', 'jenis.nama as jenis_kendaraan')
        ->join('jenis', 'jenis.id', '=', 'kendaraan.jenis_kendaraan_id')
        ->where('kendaraan.id', $id)
        ->first();

        $jenis_kendaraan = jenis::get();
        // dd($data_kendaraan);
        return view('cms.data_kendaraan.edit', compact('jenis_kendaraan', 'data_kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        kendaraan::where('id', $id)
        ->update([
            'merk' => $request->merk,
            'pemilik' => $request->pemilik,
            'nopol' => $request->nopol,
            'thn_beli' => $request->thn_beli,
            'deskripsi' => $request->deskripsi,
            'jenis_kendaraan_id' => $request->jenis_kendaraan_id,
            'kapasitas_kursi' => $request->kapasitas_kursi,
            'rating' => $request->rating
        ]);
        return redirect('/cms/data_kendaraan')->with('status', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function daftar_kendaraan()
    {
        $jenis_kendaraan = Jenis::get();
        return view('cms.data_kendaraan.create', compact('jenis_kendaraan'));
    }

    public function transaksi_view()
    {
        $no = 1;
        $transaksi = DB::table('transaksi')
                    ->select('transaksi.*', 'kendaraan.pemilik as pemilik', 'area_parkir.nama as area')
                    ->join('kendaraan', 'kendaraan.id', '=', 'transaksi.kendaraan_id')
                    ->join('area_parkir', 'area_parkir.id', '=', 'transaksi.area_parkir_id')
                    ->orderBy('transaksi.id', 'desc')
                    ->get();
        // dd($transaksi);
        return view('cms.transaksi.index', compact('no', 'transaksi'));
    }

    public function transaksi_create()
    {
        $jenis_kendaraan = Kendaraan::get();
        $area_parkir = Area::get();
        // dd($jenis_kendaraan);
        return view('cms.transaksi.create', compact('jenis_kendaraan', 'area_parkir'));
    }

    public function transaksi_store(Request $request)
    {
        Transaksi::create([
            'tanggal' => $request->tanggal,
            'mulai' => $request->mulai,
            'akhir' => $request->akhir,
            'biaya' => $request->biaya,
            'keterangan' => $request->keterangan,
            'kendaraan_id' => $request->kendaraan_id,
            'area_parkir_id' => $request->area_parkir_id
        ]);

        return redirect('/cms/transaksi')->with('status', 'Data Transaksi berhasil dibuat');
    }

    public function user_access()
    {
        // $no = 1;
        // $data_kendaraan = DB::table('kendaraan')
        //             ->select('kendaraan.*', 'jenis.nama as jenis_kendaraan')
        //             ->join('jenis', 'jenis.id', '=', 'kendaraan.jenis_kendaraan_id')
        //             ->orderBy('kendaraan.id', 'desc')
        //             ->get();
        // return view('cms.data_kendaraan.user', compact('no', 'data_kendaraan'));
        $jenis_kendaraan = Kendaraan::get();
        $area_parkir = Area::get();
        return view('cms.data_kendaraan.create', compact('area_parkir', 'jenis_kendaraan'));
    }
}
