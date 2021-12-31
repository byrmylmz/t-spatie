<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;


class SpatieController extends Controller
{
    public function create() {
        // $role = Role::create(['name' => 'writer1332']);
        // $permission = Permission::create(['name' => 'create todo']);
        // $permission = Permission::create(['name' => 'read todo']);
        // $permission = Permission::create(['name' => 'update todo']);
        // $permission = Permission::create(['name' => 'delete todo']);
        $role = Role::create(['name' => 'demo']);
        $role = Role::create(['name' => 'user']);
        // $user = Auth::user();
        // $user->assignRole('writer');

    }

    public function show(){
        $user = Auth::user();
        // $user->givePermissionTo('edit articles');
       $user->assignRole('demo');


    }
}
