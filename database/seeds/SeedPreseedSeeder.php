<?php

use Illuminate\Database\Seeder;

class SeedPreseedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// implement this on other environment seeder. 
    	// preseed don't care about the environment.
    	if('production' == app()->environment()) {
    		// only then run the seeding..
    		// else buat tak tahu...
    	}
        $this->seedUsers();
        $this->seedAccessControlList();
        $this->seedApplicationSettings();
    }

    private function seedUsers()
    {
    	\App\User::truncate();
    	$user = \App\User::create([
        	'name' => 'Superadmin',
        	'email' => 'superadmin@t.app',
        	'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ]);
    }

    private function seedAccessControlList()
    {
    	// roles, permissions, etc.
    }

    private function seedApplicationSettings()
    {
    	// google analytic, seo, etc.
    }
}
