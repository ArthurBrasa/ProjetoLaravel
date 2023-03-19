<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criação das permições
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'delete anyUser']);
        Permission::create(['name' => 'delete anyArticles']);

        // Roles
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo("create articles");
        $role1->givePermissionTo("publish articles");
        $role1->givePermissionTo("delete articles");
        $role1->givePermissionTo("edit articles");

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo("create articles");
        $role2->givePermissionTo("publish articles");
        $role2->givePermissionTo("delete articles");
        $role2->givePermissionTo("edit articles");
        $role2->givePermissionTo("delete anyArticles");

        $role3 = Role::create(['name' => "Super-Admin"]);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // CREATE DEMON USERS

        $user = new User;
        $user->name = 'Usuário Demo';
        $user->email = 'user@user.com';
        $user->password = Hash::make('@admin12345A');
        $user->save();
        $user->assignRole($role1);
        
        $user2 = new User;
        $user2->name = 'Admin';
        $user2->email = 'admin@admin.com';
        $user2->password = Hash::make('@admin12345A');
        $user2->save();
        $user2->assignRole($role2);
        
        $user3 = new User;
        $user3->name = 'Super Admin';
        $user3->email = 'superadmin@superadmin.com';
        $user3->password = Hash::make('@admin12345A');
        $user3->save();
        $user3->assignRole($role3);


    }
}
