<x-layout title="Elenco Game">
    <div class="container-fluid mt-5 pt-5 ">
        <div class="row"> 
                <h1 class="text-center">Games</h1>
            @foreach ($games as $game)
            <x-card :data="$game" route="game"/>
            @endforeach
        </div>
    </div>
    
    
</x-layout>