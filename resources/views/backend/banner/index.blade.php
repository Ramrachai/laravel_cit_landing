@extends('backend.index')
@section('contents')
{{-- Alert section  --}}
@if (session('message'))
<div class="alert alert-dismissible fade show alert-success" role="alert">
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>  
@endif

{{-- Alert section finish  --}}
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Banners</h2>
        </div>

        <div class="card-body">
            <table class="table table-hover table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($banners as $key => $banner)
                    <tr>
                        <td scope="row"> {{ $key + 1 }} </td>
                        <td><img src="images/{{ $banner->image }}" alt="" height="50"></td>
                        <td>
                            <label class="switch switch-success switch-pill form-control-label">
                                <input type="checkbox" name='status' class="switch-input form-check-input" @if ($banner->status == 1) checked @endif >
                                <span class="switch-label"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </td>
                        <td>
                            <a href="{{ route('banner.show', $banner->id) }}" class="mb-2 mr-2 badge  badge-info">
                                Show
                            </a>
                            {{-- <a href='{{ route('banner.edit', $banner->id) }}' class="mb-2 mr-2 badge badge-warning">
                                Edit
                            </a> --}}

                            <form class="d-inline" action="{{ route('banner.destroy', $banner->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="mb-2 mr-2 badge  badge-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination --}}
            <div class="container">
                {{ $banners->links() }}
            </div>
        </div>
    </div>
@endsection
