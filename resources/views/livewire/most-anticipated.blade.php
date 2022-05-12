<div wire:init="getMostAnticipated" class="most-anticipated-container space-y-10 mt-8">
    @foreach($mostAnticipated as $game)
        <div class="game flex">
            @isset($game['cover'])
                <a href="#">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                </a>
            @endisset
            <div class="ml-4">
                <a href="#" class="hover:text-gray-300">
                    {{ $game['name'] }}
                </a>
                <div class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}</div>
            </div>
        </div>
    @endforeach
</div>