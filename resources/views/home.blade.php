<x-layout title="">
    <x-slot:style>
        <style>
            .header{
   
     background:linear-gradient(0deg, rgba(0,0,0,0.8215861344537815) 37%, rgba(0,0,0,0.6222864145658263) 100%), url(/media/img-bg2.jpg);
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
     
    
}
        </style>

    </x-slot>
    <header class="container-fluid vh-100 mt-5 pt-5 ">
        <div class="row justify-content-md-center align-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <h1 class="text-danger ">Republic Of Gamers</h1>
            </div>
            <div class="col-12">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div> 
            {{-- <div style="height: 2000px"></div> --}}
        </div>
        
        
        
    </header>   
        
        
    </x-layout>