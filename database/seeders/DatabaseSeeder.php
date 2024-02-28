<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competance;
use App\Models\Metier;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $metiers = [
            'Plumber' => [
                'Pipe Fitting',
                'Leak Repair',
                'Fixture Installation',
                'Drain Cleaning',
                'Water Heater Installation',
                'Sump Pump Repair',
            ],
            'Electrician' => [
                'Wiring',
                'Electrical Troubleshooting',
                'Fixture Installation',
                'Lighting Installation',
                'Appliance Repair',
                'Circuit Breaker Replacement',
                'Ceiling Fan Installation',
            ],
            'Carpenter' => [
                'Cabinet Making',
                'Framing',
                'Trim Work',
                'Flooring Installation',
                'Deck Building',
            ],
            'Painter' => [
                'Interior Painting',
                'Exterior Painting',
                'Drywall Repair',
                'Staining',
                'Wallpaper Installation',
            ],
            'HVAC Technician' => [
                'HVAC Installation',
                'AC Repair',
                'Heating System Maintenance',
                'Duct Cleaning',
                'Thermostat Installation',
                'Air Quality Testing',
                'Heat Pump Repair',
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
                Competance::create([
                    'name' => $skillName,
                    'metier_id' => $metier->id,
                ]);
            }
        }

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'artisan']);
        Role::create(['name' => 'client']);

    }
}
