<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@yavirac.edu.ec';
        $user->password = 'admin@yavirac.edu.ec';
        $user->role = 'admin';

        $user->save();

        $user = new User;
        $user->name = 'estudiante';
        $user->email = 'estudiante@yavirac.edu.ec';
        $user->password = 'estudiante@yavirac.edu.ec';
        $user->role = 'estudiante';
        
        $user->save();
    }
}
