<x-layout title="Inserisci Gioco">
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
            <div class="col-12 mb-3 text-center">
                <h1 >Inserisci Gioco</h1>
            </div>
            <div class="col-8">
                <form method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input  name="title" type="text" class="form-control" id="title" @error('title') is-invalid @enderror value="{{old('title')}}" >
                        @error ('title'){{$message}} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" type="string" class="form-control" id="price" @error('price') is-invalid @enderror value="{{old('title')}}" >
                        @error ('price'){{$message}} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" @error('description') is-invalid @enderror cols="20" rows="10">{{old('title')}}</textarea>
                        @error ('description'){{$message}} @enderror
                    </div>
                    <div class="my-5 text-center">
                        <h5>Consoles</h5>
                    </div>
                    <div class="row">
                        @foreach ($consoles as $console)    
                        <div class="form-check col-6 col-md-3 col-lg-2">
                            <input class="form-check-input ms-2" type="checkbox" value="{{$console->id}}" id="flexCheckDefault" name="console[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$console->name}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-3 form-check">
                        <label for="category_id" class="form-label text-center">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Open this select menu</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error ('category_id'){{$message}} @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input name="img" type="file" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div> 
    </div>
</div>
</div>
</x-layout>