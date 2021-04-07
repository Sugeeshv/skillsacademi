<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-management',
            'terms-and-conditions',
            'contact-us',
            'popular-courses',
            'blog-categories',
            'user-management',
            'tag-management',
            'subscriptions',
            'new-blog',
            'blog-comments',
            'privacy-policy',
            'about-us',
            'testimonials',
            'blog-list',
            'cookie-policy'
        ];
        foreach ($permissions as $permission) {
        Permission::create(['name' => $permission]);
        }
    }
}
