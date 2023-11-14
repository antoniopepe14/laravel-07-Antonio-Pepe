
<div class="card col-12 col-md-3 m-5 d-flex border-0">
    <img class="img-card" src="{{Storage::url($data->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title text-center ">{{$data->title}}</h5>
        <div class="d-flex justify-content-around mt-2 ">
            <a href="{{route('show.game',compact('data'))}}" class="btn btn-primary mx-2">Vai al gioco</a>
            <a href="{{route('edit.game',compact('data'))}}" class="btn btn-warning mx-2">Modifica </a>
            <form method="POST" action="{{route('destroy.game',compact('data'))}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mx-2 "> Elimina</button>
            </form>
        </div>
    </div>
</div>

