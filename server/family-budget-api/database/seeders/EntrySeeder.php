<?php

namespace Database\Seeders;

use App\Models\Entry;
use Database\Factories\EntryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entry::factory(5)->create();
    }
}