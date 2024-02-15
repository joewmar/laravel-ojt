<div>
    <div class="text-center pb-10">
        <x-alert />
        <input type="text" name="" id="" class="rounded-md w-1/5 border-0 py-2 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6" wire:model.live="name">
        <x-button :button="$button" :click="'save'" />
        <div class="text-red-500">
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        {{-- <span class="absolute -ml-6 mt-2">
            <span x-text="$wire.name.length"></span>
        </span> --}}
    </div>
    <div class="overflow-y-auto h-52">
        @foreach ($tasks as $task)
            <x-task-item :task="$task" />
        @endforeach
    </div>

</div>
    