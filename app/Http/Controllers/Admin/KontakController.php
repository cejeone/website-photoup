<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kontak;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\KontakRequest;

class KontakController extends Controller
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
        $query = Kontak::query();

        return Datatables::of($query)
        ->addIndexColumn()
        ->addColumn('aksi', function($item) {
        return '
        <div class="btn-group">
            <div class="edit">
                <a type="button" class="btn btn-info" href="'.
                        route('kontak.edit', $item->id) .'"><i class="fas fa-pen"></i>
                </a>
            </div>
        </div>
        ';

        })


        ->rawColumns(['aksi'])
        ->make();

        }

        return view('admin.kontak.index');
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
     * @param  \Illuminate\Http\Admin\KontakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KontakRequest $request)
    {
        //
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
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak)
    {
        $item = Kontak::findOrFail($kontak->id);

        return view('admin.kontak.edit', [
        'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Admin\KontakRequest  $request
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(KontakRequest $request, Kontak $kontak)
    {
        $data = $request->all();
        $data['id_user'] = auth()->id();

        $item = Kontak::findOrFail($kontak->id);

        $item->update($data);

        return redirect()->route('kontak.index')->with('success', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak)
    {

    }
}
