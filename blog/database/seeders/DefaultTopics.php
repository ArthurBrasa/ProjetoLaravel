<?php

namespace Database\Seeders;


use App\Models\Topics;
use Illuminate\Database\Seeder;

class DefaultTopics extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $t1 = new Topics;
        $t1->type = 'Anime';
        $t1->save();

        $t2 = new Topics;
        $t2->type = 'Tech';
        $t2->save();
        
        $t3 = new Topics;
        $t3->type = 'Cosplay';
        $t3->save();
        
        $t4 = new Topics;
        $t4->type = 'Game';
        $t4->save();
    }
}
