<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-8">
                
                <form method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input  name="title" type="text" class="form-control" id="title" @error('title') is-invalid @enderror value="{{old('title')}}" >
                    </div>
                    @error ('title'){{$message}} @enderror
                    <div class="mb-3 form-check">
                        <label for="price" class="form-label">price</label>
                        <input name="price" type="number" class="form-control" id="price" @error('price') is-invalid @enderror value="{{old('title')}}" >
                    </div>
                    @error ('price'){{$message}} @enderror
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" @error('description') is-invalid @enderror cols="20" rows="10">{{old('title')}}</textarea>
                    </div>
                    @error ('description'){{$message}} @enderror
                    <div class="mb-3 form-check">
                        <input name="img" type="file" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>