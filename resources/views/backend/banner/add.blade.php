@extends('backend.index')
@section('contents')
    <div class="col-lg-8 mx-auto col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Add Banner</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('banner.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="image">Choose banner (Required)</label>
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
{{-- 
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title')is-invalid @enderror" id="title"
                                placeholder="Optional" name='title'>
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
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                placeholder="Optional" name='description'>
                            </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="btn_txt">Button Text</label>
                            <input type="text" class="form-control @error('btn_txt') is-invalid @enderror" id="btn_txt"
                                placeholder="Optional" name='btn_txt'>
                            @error('btn_txt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="btn_link">Button Link</label>
                            <input type="text" class="form-control @error('btn_link') is-invalid @enderror" id="btn_link"
                                placeholder="Optional" name='btn_link'>
                            @error('btn_link')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>  --}}

                    <button class="w-50  btn btn-primary btn-block" type="submit">Save</button>
                </form>
            </div>
        </div> <!-- card -->
    </div>
@endsection
