<x-layout>

    <h1>{{$data->title}}</h1>
    <div class="container">
        <div class="row">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{Storage::url($data->img)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$data->title}}</h5>
                            <p class="card-text">{{$data->description}}</p>
                            <p class="card-text"><small class="text-body-secondary">{{$data->price}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


</x-layout>