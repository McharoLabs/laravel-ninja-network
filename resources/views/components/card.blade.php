@props(['highlight' => false])

<div {{ $attributes->merge([
    'class' =>
        'relative flex items-center gap-4 bg-white rounded-md border p-6 shadow-sm transition hover:shadow-md ' .
        ($highlight
            ? 'border-red-300'
            : 'border-red-200 ')
]) }}>
    @if ($highlight)
        <span class="absolute left-0 top-0 h-full w-1 rounded-l-md bg-red-600"></span>
    @endif

    <div class="flex-1 text-gray-700 pl-2">
        {{ $slot }}
    </div>

    <a
    {{ $attributes }}
        class="ml-auto inline-flex items-center justify-center rounded-lg bg-black/20 px-4 py-2 text-sm font-semibold transition hover:bg-red-500 hover:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        View Details
    </a>
</div>