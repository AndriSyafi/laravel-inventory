<?php

namespace App\Http\Controllers;
use App\Models\MasterBarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class MasterBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = MasterBarangModel::all();
        return view('master/barang/index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('master/barang/form-tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $insert = MasterBarangModel::create([
                'kode'        =>$request->html_kode,
                'nama'        =>$request->html_nama,
                'deskripsi'   =>$request->html_deskripsi,
                'id_kategori' =>0,
                'id_gudang'   =>0,
                'dibuat_kapan' => date('Y-m-d H:i:s'),
                'dibuat_oleh'  => Auth::user()->id,
                'diperbarui_kapan' =>null,
                'diperbarui_oleh' => null,
            ]);
            if($insert){
                return redirect()
                ->route('master-barang')
                ->with('success', 'berhasil menambahkan barang baru');
            }
        } catch (\Throwable $th){
            return redirect()
            ->route('master-barang-tambah')
            ->with('danger', $th->getMessage());

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
