<x-layout title="Dettaglio Gioco">

    <div class="container-fluid imgbg vh-100 mt-5 pt-5 ">
        <h1 class="text-center py-4">{{$data->title}}</h1>
        <div class="row mx-5 px-5">
            <div class="card mb-3 px-0">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{Storage::url($data->img)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title fs-3 my-3">{{$data->title}}</h5>
                            <p class="card-text fs-4">{{$data->description}}</p>
                            <p class="card-text fs-4"><small class="text-body-secondary">{{$data->price}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


</x-layout>