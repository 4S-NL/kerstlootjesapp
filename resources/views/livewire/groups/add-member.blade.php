<div>
    <h2 class="text-2xl font-bold">Members</h2>

    @if($showInput)
        <div>
            <input type="text">
            <button>Add</button>
        </div>
    @endif

    <div>
        @foreach($group->users as $user)
            {{$user->name}},
        @endforeach
    </div>
    {{-- add member button --}}
    <button wire:click="showInput" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Add member</button>
</div>
