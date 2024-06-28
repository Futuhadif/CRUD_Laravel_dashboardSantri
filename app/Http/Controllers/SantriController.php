<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use RealRashid\SweetAlert\Facades\Alert;


class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtSantri = Santri::paginate(3);
        return view('home',compact('dtSantri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Santri::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'tgllhr'=>$request->tgllhr,
        ]);
        toast('Data Berhasil Disimpan','success');
        return redirect('dashboard');
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
        $dtSantriUpdate = Santri::findorfail($id);
        return view('update',compact('dtSantriUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $santriUpdate = Santri::findorfail($id);
        $santriUpdate->update($request->all());
        toast('Data Berhasil Diupdate','success');
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $santriDelete = Santri::findorfail($id);
        $santriDelete->delete();
        toast('Data Berhasil DiHapus','success');
        return back();
    }
}
