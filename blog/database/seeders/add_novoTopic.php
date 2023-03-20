<?php

namespace Database\Seeders;

use App\Models\Topics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class add_novoTopic extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t = new Topics();
        $t->type = 'fire';
        $t->save();
    }
}
