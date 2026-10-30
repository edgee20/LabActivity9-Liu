<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $title = 'Bakuna Tracker - Purok Liu';
        $schedules = Vaccination::orderBy('scheduled_at')->get();
        $stats = [
            ['label' => 'Total', 'value' => $schedules->count()],
            ['label' => 'Done', 'value' => $schedules->where('status', 'Done')->count()],
            ['label' => 'Scheduled', 'value' => $schedules->where('status', 'Scheduled')->count()],
            ['label' => 'Overdue', 'value' => $schedules->where('status', 'Overdue')->count()],
        ];
        $alerts = $schedules->where('status', 'Overdue');

        return view('dashboard.index', compact('title', 'stats', 'schedules', 'alerts'));
    }

    public function schedule(): View
    {
        $title = 'Vaccine Schedule - Purok Liu';
        $schedules = Vaccination::orderBy('scheduled_at')->get();

        return view('schedule.index', compact('title', 'schedules'));
    }
}
