@extends('backend.index')
@section('contents')
    <div class="col-lg-8 mx-auto col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Update About Section </h2>
            </div>
@if (session('message'))
<div class="container">
    <div class="alert alert-success">
        <p class="text-center"> {{ session('message') }}</p>
    </div>
</div> 
@endif
      
            <div class="card-body">
                <form action="{{ route('about.update', $id) }}" enctype="multipart/form-data" method="post">
                    @csrf
                   @method('put')
                    <div class="form-row">
                        <img height='100' src="images/{{ $image }} " alt="">
                        <div class="col-md-12 mb-3">
                            
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control banner_input @error('image') is-invalid @enderror" id="image"
                            name='image'
                            required />
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control banner_input @error('title') is-invalid @enderror" id="title"
                            name='title'
                            value="{{ $title }}"
                            required />
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" rows="9" class="form-control">{{ $description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                   
                    <button class="w-50  btn btn-primary btn-block" type="submit">Save</button>
                </form>
            </div>
           
        </div> <!-- card -->
    </div>
@endsection
