<a {{ $attributes->merge(['href' => '#'])->class(['flex items-center justify-center text-white bg-gray-900 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-900/70 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700']) }}>
    {{ $slot }}
</a>