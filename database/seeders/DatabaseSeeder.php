<?php

namespace Database\Seeders;

use App\Http\Livewire\Tasks;
use App\Models\Task;
use App\Models\User;
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
        Task::factory(3)->create();
        User::factory()->create([
            'email' => 'giovane.oliveira@funcionalconsultoria.com.br',
            'password' => bcrypt('J240380j'),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
