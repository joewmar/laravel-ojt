<button class="rounded-md bg-pink-600 py-3 px-4 text-sm font-semibold text-white shadow-md hover:bg-pink-500" type="submit"
    wire:click="{{$click}}" 
 >
    <div class="flex gap-5 items-center">
        <div wire:loading >
            <x-spinner />
        </div>
        <div>{{$button}}</div>
    </div>
</button>

