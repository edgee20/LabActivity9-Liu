@extends('layouts.app')

@section('title', $title)

@section('content')
    <main class="space-y-6 bg-gray-100 px-4 py-8">
        <h1 class="text-2xl font-bold text-gray-900">{{ $title }}</h1>

        <x-panel title="All vaccination schedules">
            <div class="overflow-x-auto">
                <table class="min-w-full text-left text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="px-3 py-2">Patient</th>
                            <th class="px-3 py-2">Purok</th>
                            <th class="px-3 py-2">Vaccine</th>
                            <th class="px-3 py-2">Dose</th>
                            <th class="px-3 py-2">Scheduled</th>
                            <th class="px-3 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($schedules as $schedule)
                            <tr class="{{ $loop->odd ? 'bg-gray-50' : '' }} border-b">
                                <td class="px-3 py-2">{{ $schedule->patient_name }}</td>
                                <td class="px-3 py-2">{{ $schedule->purok }}</td>
                                <td class="px-3 py-2">{{ $schedule->vaccine }}</td>
                                <td class="px-3 py-2">{{ $schedule->dose }}</td>
                                <td class="px-3 py-2">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                                <td class="px-3 py-2">{{ $schedule->status }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-3 py-4 text-center text-gray-600">No schedules yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </x-panel>
    </main>
@endsection
