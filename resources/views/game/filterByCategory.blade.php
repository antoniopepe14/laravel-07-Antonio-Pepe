<x-layout>

<div class="container-fluid">
    <div class="row">
        
            @foreach ($category->games as $game)
            <x-card :data="$game" route="game"/>
            @endforeach
        
    </div>
</div>


</x-layout>