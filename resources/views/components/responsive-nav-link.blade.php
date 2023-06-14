@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white transition duration-150 ease-in-out bg-gray-100'
            : 'block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white transition duration-150 ease-in-out';
            @endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
