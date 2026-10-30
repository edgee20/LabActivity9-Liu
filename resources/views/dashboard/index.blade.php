@extends('layouts.app')

@section('title', $title)

@section('content')
    <main class="space-y-6 bg-gray-100 px-4 py-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">{{ $title }}</h1>
            <p class="text-sm text-gray-600">Vaccination schedule overview</p>
        </div>

        @if ($alerts->isNotEmpty())
            <div class="rounded-md bg-red-100 p-4 text-red-800">
                {{ $alerts->count() }} overdue vaccination(s) need attention.
            </div>
        @elseif ($schedules->isEmpty())
            <div class="rounded-md bg-yellow-100 p-4 text-yellow-800">
                No vaccination schedules available.
            </div>
        @else
            <div class="rounded-md bg-green-100 p-4 text-green-800">
                All schedules are up to date.
            </div>
        @endif

        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-4">
            @foreach ($stats as $stat)
                <x-stat-card :title="$stat['label']" :value="$stat['value']" />
            @endforeach
        </div>

        <x-panel title="Vaccination schedule">
            <div class="overflow-x-auto">
                <table class="min-w-full text-left text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="px-3 py-2">#</th>
                            <th class="px-3 py-2">Patient</th>
                            <th class="px-3 py-2">Vaccine</th>
                            <th class="px-3 py-2">Scheduled</th>
                            <th class="px-3 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($schedules as $schedule)
                            <tr class="{{ $loop->odd ? 'bg-gray-50' : '' }} border-b">
                                <td class="px-3 py-2">{{ $loop->iteration }}</td>
                                <td class="px-3 py-2">{{ $schedule->patient_name }}</td>
                                <td class="px-3 py-2">{{ $schedule->vaccine }}</td>
                                <td class="px-3 py-2">{{ $schedule->scheduled_at->format('M d, Y') }}</td>
                                <td class="px-3 py-2">
                                    @unless ($schedule->status === 'Overdue')
                                        <span class="text-gray-700">{{ $schedule->status }}</span>
                                    @endunless
                                    @if ($schedule->status === 'Overdue')
                                        <span class="font-medium text-red-600">{{ $schedule->status }}</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-3 py-4 text-center text-gray-600">No schedules yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </x-panel>
    </main>
@endsection
