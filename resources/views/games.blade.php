<x-layout title="Elenco Game">
    <div class="container-fluid mt-3 pt-3 ">
        <div class="row"> 
            <div class="col-12 my-2">
                <h1 class="text-center">Games</h1>
            </div>
            <div class="col-12">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div> 
            @foreach ($games as $game)
            <x-card :data="$game" route="game"/>
            @endforeach
        </div>
    </div>
    
    
</x-layout>