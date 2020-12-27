@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Car') }}</div>

                <div class="card-body">
                   <form action="{{ route('car:store') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                       </div>
                       <div class="form-group">
                            <label for="">Colour</label>
                            <input type="text" name="colour" class="form-control">
                            @error('colour')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" name="Price" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Store My Car</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
