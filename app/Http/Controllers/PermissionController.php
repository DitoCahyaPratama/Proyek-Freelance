<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function Permission()
    {   
    	$pKaryawan_permission = Permission::where('slug','create-tasks')->first();
		$pKerja_permission = Permission::where('slug','create-tasks')->first();
		$admin_permission = Permission::where('slug', 'edit-users')->first();

		//RoleTableSeeder.php
		$pKaryawan_role = new Role();
		$pKaryawan_role->slug = 'pKaryawan';
		$pKaryawan_role->name = 'Pencari Karyawan';
		$pKaryawan_role->save();
		$pKaryawan_role->permissions()->attach($pKaryawan_permission);

		$pKerja_role = new Role();
		$pKerja_role->slug = 'pKerja';
		$pKerja_role->name = 'Pencari Kerjas';
		$pKerja_role->save();
		$pKerja_role->permissions()->attach($pKerja_permission);

		$admin_role = new Role();
		$admin_role->slug = 'admin';
		$admin_role->name = 'Admin Freelancer';
		$admin_role->save();
		$admin_role->permissions()->attach($admin_permission);

		$pKaryawan_role = Role::where('slug','pKaryawan')->first();
		$pKerja_role = Role::where('slug', 'pKerja')->first();
		$admin_role = Role::where('slug', 'admin')->first();

		$createTasks = new Permission();
		$createTasks->slug = 'create-tasks';
		$createTasks->name = 'Create Tasks';
		$createTasks->save();
		$createTasks->roles()->attach($pKaryawan_role);
		$createTasks->roles()->attach($pKerja_role);

		$editUsers = new Permission();
		$editUsers->slug = 'edit-users';
		$editUsers->name = 'Edit Users';
		$editUsers->save();
		$editUsers->roles()->attach($admin_role);

		$pKaryawan_role = Role::where('slug','pKaryawan')->first();
		$pKerja_role = Role::where('slug', 'pKerja')->first();
		$admin_role = Role::where('slug', 'admin')->first();

		$pKaryawan_perm = Permission::where('slug','create-tasks')->first();
		$pKerja_perm = Permission::where('slug','create-tasks')->first();
		$admin_perm = Permission::where('slug','edit-users')->first();

		$pKaryawan = new User();
		$pKaryawan->name = 'karyawan';
		$pKaryawan->email = 'karyawan@gmail.com';
		$pKaryawan->password = bcrypt('12345678');
		$pKaryawan->save();
		$pKaryawan->roles()->attach($pKaryawan_role);
		$pKaryawan->permissions()->attach($pKaryawan_perm);

		$pKerja = new User();
		$pKerja->name = 'bos kerja';
		$pKerja->email = 'kerja@gmail.com';
		$pKerja->password = bcrypt('12345678');
		$pKerja->save();
		$pKerja->roles()->attach($pKerja_role);
		$pKerja->permissions()->attach($pKerja_perm);

		$admin = new User();
		$admin->name = 'admin';
		$admin->email = 'admin@gmail.com';
		$admin->password = bcrypt('12345678');
		$admin->save();
		$admin->roles()->attach($admin_role);
		$admin->permissions()->attach($admin_perm);
		
		return redirect()->back();
    }
}
