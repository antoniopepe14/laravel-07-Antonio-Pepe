<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8-md-4-sm-12 d-flex justify-content-center"> 
                <h1 class="text-center">Games</h1>
            </div>
            @foreach ($games as $game)
            <x-card :data="$game" route="game"/>
            @endforeach
        </div>
    </div>
    
    
</x-layout>