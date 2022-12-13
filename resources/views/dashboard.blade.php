<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <h2 class="text-2xl">Mijn groepen</h2>
                        <a href="{{route('groups.create') }}" type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Create new group</a>
                    </div>
                    <hr>
                    <ul class="mt-4 divide-y divide-gray-200 ">
                       @foreach($ownerGroups as $group)
                       <li class="pb-3 sm:pb-4">
                          <div class="flex items-center space-x-4">
                             <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate ">
                                    <a class="text-blue-600" href="{{route('groups.show', $group)}}">{{ $group->name }} <b>OWNER</b></a>
                                </p>
                                <p class="text-sm text-gray-500 truncate ">
                                   {{$group->event_date }}
                                </p>
                             </div>
                             <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                &euro; {{ $group->budget }}
                             </div>
                          </div>
                       </li>
                       @endforeach

                        @foreach( $groups as $group )
                        <li class="pb-3 sm:pb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate ">
                                    <a href="{{route('groups.show', $group)}}" class="text-blue-600">{{$group->name}}</a>
                                    </p>
                                    <p class="text-sm text-gray-500 truncate ">
                                    {{$group->event_date}}
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                    &euro; {{$group->budget}}
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl">Notificaties</h2>
                    <ul class="space-y-1  list-inside text-gray-500 ">
                        <li class="mt-4 flex items-center">
                            <svg class="w-4 h-4 mr-1.5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            Klaas Janssen uit groep &nbsp; <span class="inline font-bold"> Kerstlootjes Familie </span> &nbsp; heeft u een bericht gestuurd
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
