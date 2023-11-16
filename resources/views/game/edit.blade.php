<x-layout>
    
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center text-danger">Modifica Gioco</h1>
            </div>
            <div class="col-8">
                <form method="POST" action="{{route('update.game', compact('data'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('Put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input  name="title" type="text" class="form-control" id="title" @error('title') is-invalid @enderror value="{{($data->title)}}" >
                        @error ('title'){{$message}} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="price" @error('price') is-invalid @enderror value="{{($data->price)}}" >
                        @error ('price'){{$message}} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" @error('description') is-invalid @enderror cols="20" rows="10">{{($data->description)}}</textarea>
                        @error ('description'){{$message}} @enderror
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5>Consoles</h5>
                        </div>
                        @foreach ($consoles as $console) 
                        <div class="form-check col-6 col-md-3 col-lg-2">
                            <input class="form-check-input ms-2" type="checkbox" value="{{$console->id}}" id="flexCheckDefault" name="console[]" @checked($data->consoles->contains($console)) >
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$console->name}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-3 form-check">
                        <label for="category_id" class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Open this select menu</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" @selected($category == $data->category) >{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="mb-3 form-check">
                            <input name="img" type="file" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>



</x-layout>