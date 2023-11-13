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
            <div class="col-8">
                
                <form method="POST" action="{{route('update.game', compact('data'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('Put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input  name="title" type="text" class="form-control" id="title" @error('title') is-invalid @enderror value="{{($data->title)}}" >
                        @error ('title'){{$message}} @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <label for="price" class="form-label">price</label>
                        <input name="price" type="number" class="form-control" id="price" @error('price') is-invalid @enderror value="{{($data->price)}}" >
                        @error ('price'){{$message}} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" @error('description') is-invalid @enderror cols="20" rows="10">{{($data->description)}}</textarea>
                        @error ('description'){{$message}} @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input name="img" type="file" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
                
            </div>
        </div>
    </div>



</x-layout>