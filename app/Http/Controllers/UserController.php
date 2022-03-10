<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.user.index', [
            'users' => $users,
            'total' => $users->total(),
            'perPage' => $users->perPage(),
            'currentPage' => $users->currentPage()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $get_role_category = DB::table('users')->where('is_admin', '=', null)->get();
        // // $users = DB::table('users');
        // // return view('admin.user.create', ['users' => $users]);
        // // $get_parent_category = DB::table('categories')->where('parent_id', '=', null)->get();
        // return view('admin.user.create', compact('get_role_category'));
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->is_admin = $request->role;
        $user->save();
        return redirect()->route('admin-user-index')->with('message', 'Create new user success');
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
        $user = DB::table('users')->where('id', '=', $id)->first();
        // dd($user);
        return view('admin.user.edit', compact('user'));
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->is_admin = $request->role;
        $user->save();
        return redirect()->route('admin-user-index')->with('message', 'Update user success');
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

    public function trash($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin-user-index', '', 201);
    }
}
