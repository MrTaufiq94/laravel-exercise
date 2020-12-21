@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Car') }}</div>

                <div class="card-body">
                   <form action="" method="post">
                       @csrf
                       <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $car->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Colour</label>
                            <textarea name="colour" class="form-control" id=""> {{ $car->colour }}</textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Owner</label>
                            <input type="text" name="owner" class="form-control" value="{{ $car->owner }}">
                        </div> --}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update My Car</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
