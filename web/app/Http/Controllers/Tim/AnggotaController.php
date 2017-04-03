<?php

namespace App\Http\Controllers\Tim;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// additional models
use App\Fakultas;
use App\Peserta;
use App\Partisipasi;
use App\User;
use Auth;

class AnggotaController extends Controller
{
    protected $regex_nim = 'regex:/1[0-6]\/[0-9]{6}\/[A-Z]{2,3}\/[0-9]{5}$/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$anggota = Partisipasi::find(Auth::user()->id);
        $anggota = Partisipasi::where('id_tim', '=', Auth::user()->id)->get();
        if ($anggota->isEmpty()) {
            return view('tim.anggota.index');
        } else {
            return view('tim.anggota.index',[
            'anggota' => $anggota,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ada_ketua = User::where('email', '=', Auth::user()->email)->get()->isEmpty();
        if ($ada_ketua) {
            $fakultas = Fakultas::all();
            return view('tim.anggota.ketua', [
                'fakultas' => $fakultas,
                ]);
        } else {
            return redirect('/tambah');
        }

        
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
        $checker = Peserta::pluck('NIM');
        
        // ketua
        if ($request->nim_ketua != "") {
            // Validate data
            $this->validate($request, [
                'ketua' => 'required',
                'nim_ketua' => ['required', $this->regex_nim],
                'prodi_ketua' => 'required',
                'ktm_ketua' => 'required|mimes:jpeg,png,bmp,jpg|max:5000',
            ]);

            $ktm_ketua = $request->file('ktm_ketua');
            $ktm_ketua->move('uploads/ktm/', str_replace('/', '_', $request->nim_ketua).'.'.$ktm_ketua->getClientOriginalExtension());
            
            if (!$checker->contains($request->nim_ketua)) {
                Peserta::create([
                    'NIM' => $request->nim_ketua,
                    'nama_lengkap' => $request->ketua,
                    'id_prodi' => $request->prodi_ketua,
                    'ktm' => 'uploads/ktm/'.str_replace('/', '_', $request->nim_ketua).'.'.$ktm_ketua->getClientOriginalExtension(),
                    ]);
            }
            Partisipasi::create([
                'NIM' => $request->nim_ketua,
                'id_tim' => Auth::user()->id,
                ]);

            $tim = User::find(Auth::user()->id);
            $tim->id_ketua = $request->nim_ketua;
            $tim->save();
        }
        
        // anggota 1
        if ($request->nim_agg != "") {
            // Validate data
            $this->validate($request, [
                'agg' => 'required',
                'nim_agg' => ['required', $this->regex_nim],
                'prodi_agg' => 'required',
                'ktm_agg' => 'required|mimes:jpeg,png,bmp,jpg|max:5000',
            ]);

            $ktm_agg = $request->file('ktm_agg');
            $ktm_agg->move('uploads/ktm/', str_replace('/', '_', $request->nim_agg).'.'.$ktm_agg->getClientOriginalExtension());
            
            if (!$checker->contains($request->nim_agg)) {
                Peserta::create([
                    'NIM' => $request->nim_agg,
                    'nama_lengkap' => $request->agg,
                    'id_prodi' => $request->prodi_agg,
                    'ktm' => 'uploads/ktm/'.str_replace('/', '_', $request->nim_agg).'.'.$ktm_agg->getClientOriginalExtension(),
                    ]);
            }
            Partisipasi::create([
                'NIM' => $request->nim_agg,
                'id_tim' => Auth::user()->id,
                ]);
        }

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
        $fakultas = Fakultas::all();
        $peserta = Peserta::find($id);
        return view('tim.anggota.edit', [
            'fakultas' => $fakultas,
            'peserta' => $peserta,
            ]);
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
        $peserta = Peserta::find($id);

        $this->validate($request, [
                'nama' => 'required',
                'NIM' => ['required','regex:/1[0-6]\/[0-9]{6}\/[A-Z]{2,3}\/[0-9]{5}/'],
                'prodi' => 'required',
            ]);

        $peserta->NIM = $request->NIM;
        $peserta->nama_lengkap = $request->nama;
        $peserta->id_prodi = $request->prodi;
        $peserta->save();

        return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partisipasi = Partisipasi::find($id);
        $partisipasi->delete();

        return redirect('/team');
    }
}
