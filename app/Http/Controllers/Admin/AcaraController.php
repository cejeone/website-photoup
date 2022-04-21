<?php

namespace App\Http\Controllers\Admin;

use App\Models\Acara;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\AcaraRequest;
use Yajra\DataTables\Facades\DataTables;

class AcaraController extends Controller
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
         $query = Acara::query();

         return Datatables::of($query)
         ->addIndexColumn()
         ->addColumn('aksi', function($item) {
         return '
         <div class="btn-group">
         <div class="edit">
             <a type="button" class="btn btn-info" href="'.
                        route('acara.edit', $item->id) .'"><i class="fas fa-pen"></i>
             </a>
            </div>
             <form action="'. route('acara.destroy', $item->id) .'" method="POST">
                 ' . method_field('delete') . csrf_field() .'
                 <button type="submit" class="btn btn-danger ml-3"><i class="fas fa-trash"></i></button>
             </form>
         </div>
         ';

         })

         ->editColumn('deskripsi_acara', function($item) {
         return $item->deskripsi_acara;
         '';

         })

         ->editColumn('poster', function($item) {
         return $item->poster? '<img src="'. Storage::url($item->poster).'"
             style="max-height: 50px;" />' :
         '';

         })



         ->rawColumns(['aksi','deskripsi_acara','poster'])
         ->make();

         }
         return view('admin.acara.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.acara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\AcaraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcaraRequest $request)
    {
        $data = $request->all();
        $data['id_user'] = auth()->id();

        $data['poster'] = $request->file('poster')->store('assets/acara','public');

        Acara::create($data);

        return redirect()->route('acara.index')->with('status', 'Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function show(Acara $acara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function edit(acara $acara)
    {
        $item = Acara::findOrFail($acara->id);

        return view('admin.acara.edit', [
        'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\AcaraRequest  $request
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function update(AcaraRequest $request, Acara $acara)
    {
        $data = $request->all();
        $data['id_user'] = auth()->id();

        $item = Acara::findOrFail($acara->id);

        if($request->poster)
        {
            $data['poster'] = $request->file('poster')->store('assets/acara','public');
        }
        else
        {
            unset($data['poster']);
        }

        $item->update($data);

        return redirect()->route('acara.index')->with('status', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acara $acara)
    {
        $item = Acara::findOrFail($acara->id);
        $item->delete();

        return redirect()->route('acara.index')->with('status', 'Berhasil dihapus');
    }
}
