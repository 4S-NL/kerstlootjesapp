<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create new group
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('groups.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="">Name</label>
                            <input type="text" name="name" id="name" placeholder="Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="event_date" class="">Event date</label>
                            <input type="date" name="event_date" id="event_date" placeholder="Event date" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('event_date') border-red-500 @enderror" value="{{ old('event_date') }}">
                            @error('event_date')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                         <div class="mb-4">
                            <label for="description" class="">Description</label>
                            <textarea placeholder="description" class="bg-gray-100 border-2 w-full p-4 rounded-lg" name="description" cols="30" rows="5"> </textarea>
                            @error('description')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="budget" class="">Budget</label>
                            <input type="number" name="budget" id="budget" placeholder="Budget" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('budget') border-red-500 @enderror" value="{{ old('budget') }}">
                            @error('budget')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Create</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
