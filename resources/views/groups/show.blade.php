<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Group: {{ $group->name }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- group detail page --}}
                    <div class="mb-4">
                        <span class="font-bold">Name: </span>
                        {{ $group->name }}
                    </div>

                    <div class="mb-4">
                        <span class="font-bold">Description: </span>
                        {{ $group->description }}
                    </div>

                     <div class="mb-4">
                        <span class="font-bold">Budget: </span>
                        {{ $group->budget }}
                    </div>
                    <div class="mb-4">
                        <span class="font-bold">Event date: </span>
                        {{Date('d-m-Y', strtotime($group->event_date))  }}
                    </div>

                     <div class="mb-4">
                        <span class="font-bold">Owner: </span>
                        {{ $group->owner->name }}
                    </div>

                    @livewire('groups.add-member', [
                        'group' => $group
                    ])
                </div>
            </div>


        </div>

         <div class="mt-4 w-1/2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-center font-bold text-2xl">Jouw lijstje</h3>

                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Product name
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Website
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Apple MacBook Pro 17"
                                    </th>

                                    <td class="py-4 px-6">
                                        Laptop
                                    </td>
                                    <td class="py-4 px-6">
                                        $2999
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Microsoft Surface Pro
                                    </th>

                                    <td class="py-4 px-6">
                                        Laptop PC
                                    </td>
                                    <td class="py-4 px-6">
                                        $1999
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Magic Mouse 2
                                    </th>

                                    <td class="py-4 px-6">
                                        Accessories
                                    </td>
                                    <td class="py-4 px-6">
                                        $99
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- add new button --}}
                        <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Add new item</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
