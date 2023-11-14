<x-layout>
    
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Contattaci
                </h1>
            </div>
            <form class="col-8" action="{{route('send.email')}}" method="POST">  
                @csrf 
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="username" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>  
            
        </div> 
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        
    </x-layout>