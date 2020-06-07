<div class="relative">
    <input type="text" class="form-input" placeholder="Search..." wire:model="query" wire:keydown.escape="reset_input"
        wire:keydown.tab="reset" wire:keydown.arrow-up="decrementHighlight" wire:keydown.arrow-down="incrementHighlight"
        wire:keydown.enter="selectContact" />

    <div wire:loading class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
        <div class="list-item">Searching...</div>
    </div>

    @if(!empty($query))
    <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="reset"></div>
    <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
        @if(!empty($datapaket))
        @foreach ($datapaket as $i => $paket)
        <a href="{{ route('show-paket', $paket['id']) }}"
            class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}">{{ $paket['nmpaket'] }}</a>
        @endforeach
        @else
        <div class="list-item">No Results!</div>
        @endif
    </div>
    @endif
</div>