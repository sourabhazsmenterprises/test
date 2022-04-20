<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPermissionRequest;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('permission_access'), 403);

        $permissions = Permission::all();

        return view('backend.permissions.index', compact('permissions'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('permission_create'), 403);

        return view('backend.permissions.create');
    }

    public function store(StorePermissionRequest $request)
    {
        abort_unless(\Gate::allows('permission_create'), 403);

        $permission = Permission::create($request->all());

        return redirect()->route('backend.permissions.index');
    }

    public function edit(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_edit'), 403);

        return view('backend.permissions.edit', compact('permission'));
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        abort_unless(\Gate::allows('permission_edit'), 403);

        $permission->update($request->all());

        return redirect()->route('backend.permissions.index');
    }

    public function show(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_show'), 403);

        return view('backend.permissions.show', compact('permission'));
    }

    public function destroy(Permission $permission)
    {
        abort_unless(\Gate::allows('permission_delete'), 403);

        $permission->delete();

        return back();
    }

    public function massDestroy(MassDestroyPermissionRequest $request)
    {
        Permission::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
