<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="text-xl font-semibold mb-4">
                        <div class="flex space-x-4">
                            <p class="font-bold">All Users</p>
                            <p>{{$userCount}}</p>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <button class="bg-green-600 text-white text-sm py-1 px-2 rounded-lg transform hover:scale-110 transition duration-200">
                            <a href="{{ url('users') }}">View all users</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
