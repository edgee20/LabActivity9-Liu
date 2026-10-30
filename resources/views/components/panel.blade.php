@props(['title'])

<section class="rounded-lg bg-white p-4 shadow">
    <h2 class="mb-4 text-lg font-semibold text-gray-900">{{ $title }}</h2>
    {{ $slot }}
</section>
