<?php

namespace App\Http\Controllers\Admin;

use App\Models\Galeri;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\GaleriRequest;

class GaleriController extends Controller
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
         $query = Galeri::query();

         return Datatables::of($query)
         ->addIndexColumn()
         ->addColumn('aksi', function($item) {
         return '
         <div class="btn-group">
         <div class="edit">
             <a type="button" class="btn btn-info" href="'.
                        route('galeri.edit', $item->id) .'"><i class="fas fa-pen"></i>
             </a>
            </div>
             <form action="'. route('galeri.destroy', $item->id) .'" method="POST">
                 ' . method_field('delete') . csrf_field() .'
                 <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
             </form>
         </div>
         ';

         })

         ->addColumn('select_all', function ($item) {
            return '
            <input type="checkbox" name="id[]" value="'. $item->id .'">
         ';
         })

         ->editColumn('foto', function($item) {
            return $item->foto ? '<img src="'. Storage::url($item->foto).'" style="max-height: 50px;" />' : '';

         })

         ->rawColumns(['aksi','foto','select_all'])
         ->make();


    }

    return view('admin.galeri.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Galeri();
        return view('admin.galeri.create', [
        'item' => $item
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\GaleriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriRequest $request)
    {
        $data = $request->all();
        $data['id_user'] = auth()->id();
        $data['foto'] = $request->file('foto')->store('assets/galeri','public');

        Galeri::create($data);

        return redirect()->route('galeri.index')->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        $item = Galeri::findOrFail($galeri->id);

        return view('admin.galeri.edit', [
        'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\GaleriRequest  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriRequest $request, Galeri $galeri)
    {
        $data = $request->all();
        $data['id_user'] = auth()->id();

        if($request->foto)
        {
            $data['foto'] = $request->file('foto')->store('assets/galeri','public');
        }
        else
        {
            unset($data['foto']);
        }
        $item = Galeri::findOrFail($galeri->id);

        $item->update($data);

        return redirect()->route('galeri.index')->with('success', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $item = Galeri::findOrFail($galeri->id);
        $item->delete();

        return redirect()->route('galeri.index')->with('success', 'Berhasil dihapus');
    }

    // public function deleteSelected(Galeri $galeri)
    // {

    //     $item = Galeri::findOrFail($galeri->id);
    //     $item->delete();

    //     return redirect()->route('galeri.index')->with('status', 'Berhasil dihapus');

    // }
}
