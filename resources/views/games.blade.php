<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-5"> <h1 class="text-center">Games</h1> </div>
            @foreach ($games as $game)
            <x-card :data="$game" route="game"/>
            @endforeach
        </div>
    </div>


</x-layout>