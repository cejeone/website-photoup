<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profil;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\ProfilRequest;
use Illuminate\Support\Str;

use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Profil::query();

            return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('aksi', function($item) {
                return '
                <div class="btn-group">
                <div class="edit">
                    <a type="button" class="btn btn-info" href="'.
                        route('profil.edit', $item->id) .'"><i class="fas fa-pen"></i>
                    </a>
                </div>
                </div>
                ';

            })

            ->editColumn('foto_ketum', function($item) {
                return $item->foto_ketum ? '<img src="'. Storage::url($item->foto_ketum).'" style="max-height: 50px;" />' : '';

            })

            ->editColumn('foto_struktural', function($item) {
            return $item->foto_struktural ? '<img src="'. Storage::url($item->foto_struktural).'" style="max-height: 50px;" />' :
            '';

            })

            ->rawColumns(['aksi','foto_ketum','foto_struktural'])
            ->make();

        }
        return view('admin.profil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\ProfilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        $item = Profil::findOrFail($profil->id);

        return view('admin.profil.edit', [
        'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\ProfilRequest  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(ProfilRequest $request, Profil $profil)
    {
        $data = $request->all();

        if($request->foto_ketum)
        {
            $data['foto_ketum'] = $request->file('foto_ketum')->store('assets/profil','public');
        }
        else
        {
            unset($data['foto_ketum']);
        }

        if($request->foto_struktural)
        {
            $data['foto_struktural'] = $request->file('foto_struktural')->store('assets/profil','public');
        }
        else
        {
            unset($data['foto_struktural']);
        }


        $item = Profil::findOrFail($profil->id);

        $item->update($data);

        return redirect()->route('profil.index')->with('success', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
