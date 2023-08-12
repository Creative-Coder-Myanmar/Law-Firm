{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-admin.master>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg mt-14">
            <h3 class="text-3xl mb-6">Dashboard</h3>

            <div class="flex space-x-4">
                <a href="{{ route('admin.news.index') }}"
                    class="bg-light w-1/2 h-40 p-5 flex rounded-md shadow-md cursor-pointer">
                    <div class="w-full">
                        <h1 class="text-3xl text-secondary font-semibold">{{ count($news) }}</h1>
                        <p class="text-lg text-smoke">Total News</p>
                    </div>
                    <span
                        class="text-lg text-light rounded-full flex items-center justify-center h-12 w-12 shrink-0 bg-secondary">
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.37 7.87988H16.62" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.38 7.87988L6.13 8.62988L8.38 6.37988" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.37 14.8799H16.62" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.38 14.8799L6.13 15.6299L8.38 13.3799" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 21H14C19 21 21 19 21 14V8C21 3 19 1 14 1H8C3 1 1 3 1 8V14C1 19 3 21 8 21Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>

                <a href="{{ route('members.index') }}"
                    class="bg-light w-1/2 h-40 p-5 flex rounded-md shadow-md cursor-pointer">
                    <div class="w-full">
                        <h1 class="text-3xl text-warning font-semibold">{{ count($members) }}</h1>
                        <p class="text-lg text-smoke">Total People</p>
                    </div>
                    <span
                        class="text-lg text-light rounded-full flex items-center justify-center h-12 w-12 shrink-0 bg-warning">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 6.16C16.94 6.15 16.87 6.15 16.81 6.16C15.43 6.11 14.33 4.98 14.33 3.58C14.33 2.15 15.48 1 16.91 1C18.34 1 19.49 2.16 19.49 3.58C19.48 4.98 18.38 6.11 17 6.16Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M15.9699 13.44C17.3399 13.67 18.8499 13.43 19.9099 12.72C21.3199 11.78 21.3199 10.24 19.9099 9.30004C18.8399 8.59004 17.3099 8.35003 15.9399 8.59003"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M4.96998 6.16C5.02998 6.15 5.09998 6.15 5.15998 6.16C6.53998 6.11 7.63998 4.98 7.63998 3.58C7.63998 2.15 6.48998 1 5.05998 1C3.62998 1 2.47998 2.16 2.47998 3.58C2.48998 4.98 3.58998 6.11 4.96998 6.16Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M5.99994 13.44C4.62994 13.67 3.11994 13.43 2.05994 12.72C0.649941 11.78 0.649941 10.24 2.05994 9.30004C3.12994 8.59004 4.65994 8.35003 6.02994 8.59003"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M11 13.63C10.94 13.62 10.87 13.62 10.81 13.63C9.42996 13.58 8.32996 12.45 8.32996 11.05C8.32996 9.61997 9.47995 8.46997 10.91 8.46997C12.34 8.46997 13.49 9.62997 13.49 11.05C13.48 12.45 12.38 13.59 11 13.63Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M8.08997 16.78C6.67997 17.72 6.67997 19.26 8.08997 20.2C9.68997 21.27 12.31 21.27 13.91 20.2C15.32 19.26 15.32 17.72 13.91 16.78C12.32 15.72 9.68997 15.72 8.08997 16.78Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</x-admin.master>
