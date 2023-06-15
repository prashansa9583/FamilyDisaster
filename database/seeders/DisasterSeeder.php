<?php

namespace Database\Seeders;

use App\Models\Disaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $natural = array('Flood / Cloud burst', 'Earthquake', 'Tsunami', 'Land slide', 'Cyclones', 'Drought', 'Lightening');
        $manmade = array('Air, rail and road accidents', 'Industrial accidents - Chemical / Nuclear', 'Bomb Blast', 'Terrorism', 'Riots');
        
        foreach($natural as $n) {
            Disaster::create([
               'name' => $n,
               'type' => 'NATURAL'
            ]);
        }
        foreach ($manmade as $m) {
            Disaster::create([
                'name' => $m,
                'type' => 'MANMADE'
            ]);
        }
    }
}
