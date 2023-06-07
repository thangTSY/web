<?php
namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    // private $permission ;
    public function index()
    {
        $permission = Permission::get();
        return view('permission.index', compact('permission'))->with('i');
    }

    public function create()
    {
        return view('permission.add');
    }

    public function store(Request $request)
    {
        Permission::create($request->all());
        return redirect()->route('permission.index')->with('thongbao','them thanh cong');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('permission.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->update($request->all());
        return redirect()->route('permission.index')->with('thongbao','update thanh cong');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permission.index')->with('thongbao','xóa thanh cong');
    }
}