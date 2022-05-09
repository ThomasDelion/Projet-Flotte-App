<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $table->foreignId('role_id')->nullable()->constrained('role');
        $admin = new Role();
        $admin->label = "Admin";
        $admin-> save();

        $moderateur = new Role();
        $moderateur->label = "Moderateur";
        $moderateur-> save();

        $membre = new Role();
        $membre->label = "Membre";
        $membre-> save();
    }
}
