@props(['color' => 'primary'])

<button {{ $attributes->merge(['type' => 'button'])->class(['flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg focus:ring-4 focus:outline-none bg-'.$color.'-700 hover:bg-'.$color.'-800 focus:ring-'.$color.'-300 dark:bg-'.$color.'-600 dark:hover:bg-'.$color.'-700 dark:focus:ring-'.$color.'-800']) }}>
    {{ $slot }}
</button>