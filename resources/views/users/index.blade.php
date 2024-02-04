<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="p-6">
                    <div class="flex justify-end mb-4">
                        <button class="bg-blue-500 text-white text-sm py-1 px-2 rounded-lg transform hover:scale-110 transition duration-200">
                            <a href="{{ url('users/create') }}">Create User</a>
                        </button>
                    </div>
                    <a href="{{url('users/' .$user->id.'/edit') }}">
                    <div class="text-xl font-semibold">
                        @foreach($users as $user)
                            <div class="card mb-4 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-200">
                                <div class="card-body p-6">
                                    <p class="text-xl font-semibold mb-2">Name: {{ $user->name }}</p>
                                    <p class="text-gray-700">Email: {{ $user->email }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div> 
                    </a>     
                </div>
            </div>
        </div>
    </div>
</x-app-layout>