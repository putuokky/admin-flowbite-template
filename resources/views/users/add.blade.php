<x-app-layout>

  @section('title', $title)
  
    <div class="px-8 pt-6 space-y-4 rounded-lg dark:border-gray-700 mt-14">
        <x-breadcrumb href="{{ url()->current() }}">{{ $title }}</x-breadcrumb>
        
        <x-card>
            <x-slot:title>{{ $title }}</x-slot:title>
            Dashboard / {{ $title }}
        </x-card>

        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="mx-auto max-w-screen-2xl">
                <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                        <div class="flex items-center flex-1 space-x-4">
                            <h5>
                                <span class="font-semibold text-white text-md">Add {{ $title }}</span>
                            </h5>
                            {{-- <h5>
                                <span class="text-gray-500">Total sales:</span>
                                <span class="dark:text-white">$88.4k</span>
                            </h5> --}}
                        </div>
                                                
                    </div>
                    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                    <div class="p-4 overflow-x-auto">
                        form disini
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>