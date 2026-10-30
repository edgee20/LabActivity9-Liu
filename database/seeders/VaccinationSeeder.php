<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['patient_name' => 'Mia Santos', 'purok' => 'Purok 2', 'vaccine' => 'BCG',
                'dose' => '1st dose', 'scheduled_at' => '2026-11-03', 'status' => 'Scheduled'],
            ['patient_name' => 'Noah Ramirez', 'purok' => 'Purok 5', 'vaccine' => 'Pentavalent',
                'dose' => '2nd dose', 'scheduled_at' => '2026-10-28', 'status' => 'Scheduled'],
            ['patient_name' => 'Ava Mendoza', 'purok' => 'Purok 1', 'vaccine' => 'OPV',
                'dose' => '1st dose', 'scheduled_at' => '2026-09-15', 'status' => 'Done'],
            ['patient_name' => 'Ej Liu', 'purok' => 'Purok 4', 'vaccine' => 'MMR',
                'dose' => '1st dose', 'scheduled_at' => '2026-04-20', 'status' => 'Scheduled'],
            ['patient_name' => 'Sofia Bautista', 'purok' => 'Purok 3', 'vaccine' => 'Anti-Flu',
                'dose' => 'Annual', 'scheduled_at' => '2026-10-20', 'status' => 'Overdue'],
            ['patient_name' => 'Ethan Villanueva', 'purok' => 'Purok 6', 'vaccine' => 'Hepatitis B',
                'dose' => 'Booster', 'scheduled_at' => '2026-12-05', 'status' => 'Scheduled'],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}
