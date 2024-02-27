<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competence;
use App\Models\Metier;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $metiers = [
            'Plumber' => [
                'Pipe Fitting',
                'Leak Repair',
                'Fixture Installation',
            ],
            'Electrician' => [
                'Wiring',
                'Electrical Troubleshooting',
                'Fixture Installation',
            ],
            'Carpenter' => [
                'Cabinet Making',
                'Framing',
                'Trim Work',
            ],
            // Add more metiers and skills as needed
        ];

        foreach ($metiers as $metierName => $skills) {
            // Create metier
            $metier = Metier::create([
                'name' => $metierName,
            ]);

            // Create skills for the metier
            foreach ($skills as $skillName) {
                Competence::create([
                    'name' => $skillName,
                    'metier_id' => $metier->id,
                ]);
            }
        }
    }
}
