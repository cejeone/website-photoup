<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\UserRequest;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
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
        $query = User::IsNotAdmin()->orderBy('id','desc')->get();

        return Datatables::of($query)
        ->addIndexColumn()
        ->addColumn('aksi', function($item) {
        return '
        <div class="btn-group">
            <div class="edit">
                <a type="button" class="btn btn-info" href="'.
                        route('user.edit', $item->id) .'"><i class="fas fa-pen"></i>
                </a>
            </div>
            <form action="'. route('user.destroy', $item->id) .'" method="POST">
                ' . method_field('delete') . csrf_field() .'
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
        </div>
        ';

        })

        ->rawColumns(['aksi'])
        ->make();

        }

        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new User();
        return view('admin.user.create', [
        'item' => $item
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Admin\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = $request->all();

         $data['password'] = bcrypt($request->password);

          User::create($data);

          return redirect()->route('user.index')->with('status', 'Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $item = User::findOrFail($user->id);

        return view('admin.user.edit', [
        'item' => $item
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Admin\UserRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $data = $request->all();

         $item = User::findOrFail($user->id);

         if($request->password) {
            $data['password'] = bcrypt($request->password);
         }
         else {
             unset($data['password']);
         }


         $item->update($data);

        return redirect()->route('user.index')->with('status', 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $item = User::findOrFail($user->id);
        $item->delete();

        return redirect()->route('user.index')->with('status', 'Berhasil dihapus');
    }
}
