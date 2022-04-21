<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\TestimonialRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
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
        $query = Testimonial::query();

        return Datatables::of($query)
        ->addIndexColumn()
        ->addColumn('aksi', function($item) {
        return '
        <div class="btn-group">
            <div class="edit">
                <a type="button" class="btn btn-info" href="'.
                        route('testimonial.edit', $item->id) .'"><i class="fas fa-pen"></i>
                </a>
            </div>
            <form action="'. route('testimonial.destroy', $item->id) .'" method="POST">
                ' . method_field('delete') . csrf_field() .'
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
        </div>
        ';

        })


        ->editColumn('foto_anggota', function($item) {
        return $item->foto_anggota ? '<img src="'. Storage::url($item->foto_anggota).'"
            style="max-height: 50px;" />' :
        '';

        })

        ->rawColumns(['aksi','foto_anggota'])
        ->make();

        }
        return view('admin.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\ProfilRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['id_user'] = auth()->id();

        $data['foto_anggota'] = $request->file('foto_anggota')->store('assets/testi','public');

        Testimonial::create($data);

        return redirect()->route('testimonial.index')->with('success', 'Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $item = Testimonial::findOrFail($testimonial->id);

        return view('admin.testimonial.edit', [
        'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Admin\TestimonialRequest  $request
     * @param   \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->all();
        $data['id_user'] = auth()->id();

        if (request()) {
            $data['foto_anggota'] = $request->file('foto_anggota')->store('assets/testi','public');
        }

        $item = Testimonial::findOrFail($testimonial->id);

        $item->update($data);

        return redirect()->route('testimonial.index')->with('success', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $item = Testimonial::findOrFail($testimonial->id);
        $item->delete();

        return redirect()->route('testimonial.index')->with('success', 'Berhasil dihapus');
    }
}
