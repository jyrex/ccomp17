<?php

namespace App\Http\Controllers\Tim;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// additional models
use App\Fakultas;
use App\Peserta;
use App\Partisipasi;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tim.anggota.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('tim.anggota.tambah', [
            'fakultas' => $fakultas,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Global checker
        $checker = Peserta::pluck('NIM')->get();

        // ketua
        if (!$checker->contains($request->nim_ketua)) {
            Peserta::create([
                'NIM' => $request->nim_ketua,
                'nama_lengkap' => $request->ketua,
                'id_prodi' => $request->prodi_ketua,
                'ktm' => 'uploads/ktm/'.$request->nim_ketua.'.'.$file->getClientOriginalExtension(),
                ]);
        }
        Partisipasi::create([
            'NIM' => $request->nim_ketua,
            'id_tim' => Auth::user()->id,
            ]);
        $ktm_ketua = $request->file('ktm_ketua');
        $ktm_ketua->move('uploads/ktm/', $request->nim_ketua);
        
        // anggota 1
        if (!$checker->contains($request->nim_agg1)) {
            Peserta::create([
                'NIM' => $request->nim_agg1,
                'nama_lengkap' => $request->agg1,
                'id_prodi' => $request->prodi_agg1,
                'ktm' => 'uploads/ktm/'.$request->nim_agg1.'.'.$file->getClientOriginalExtension(),
                ]);
        }
        Partisipasi::create([
            'NIM' => $request->nim_agg1,
            'id_tim' => Auth::user()->id,
            ]);
        $ktm_agg1 = $request->file('ktm_agg1');
        $ktm_agg1->move('uploads/ktm/', $request->nim_agg1);

        // anggota 2
        if (!$checker->contains($request->nim_agg2)) {
            Peserta::create([
                'NIM' => $request->nim_agg2,
                'nama_lengkap' => $request->agg2,
                'id_prodi' => $request->prodi_agg2,
                'ktm' => 'uploads/ktm/'.$request->nim_agg2.'.'.$file->getClientOriginalExtension(),
                ]);
        }
        Partisipasi::create([
            'NIM' => $request->nim_agg2,
            'id_tim' => Auth::user()->id,
            ]);
        $ktm_agg2 = $request->file('ktm_agg2');
        $ktm_agg2->move('uploads/ktm/', $request->nim_agg2);

        return redirect('/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
