<x-app-layout>

    @section('title', $title)

    <div class="px-8 pt-6 space-y-4 rounded-lg dark:border-gray-700 mt-14">
        <x-breadcrumb href="{{ route('users.index') }}">{{ $title }}</x-breadcrumb>

        <x-card>
            <x-slot:title>{{ $title }}</x-slot:title>
            Dashboard / {{ $title }}
        </x-card>

        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="mx-auto max-w-screen-2xl">
                <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div
                        class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
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
                        <form method="POST" action="#">
                            <div class="grid gap-4 mb-6 md:grid-cols-2">
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" id="name" name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Enter Name" required>
                                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">
                                        Oh, snapp! Some error message.</p>
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                        address</label>
                                    <input type="email" id="email" name="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Enter Email" required>
                                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">
                                        Oh, snapp! Some error message.</p>
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required>
                                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">
                                        Oh, snapp! Some error message.</p>
                                </div>
                                <div>
                                    <label for="confirm_password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                        password</label>
                                    <input type="password" id="confirm_password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••" required>
                                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-500 dark:text-red-400">
                                        Oh, snapp! Some error message.</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <x-button type="submit">Add {{ $title }}</x-button>
                                <x-link.light :href="route('users.index')">Back</x-link.light>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
