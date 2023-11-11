
        <div class="card col-12 col-md-4 m-5 border-0" style="width: 18rem;">
            <img class="img-card" src="{{Storage::url($data->img)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$data->title}}</h5>
                <a href="{{route('show.'.$route,['id'=>$data->id])}}" class="btn btn-primary">Vai al gioco</a>
            </div>
        </div>

