@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Car') }}</div>

                <div class="card-body">
                   {{-- <form action="" method="post">
                       @csrf --}}
                       <div class="form-group">
                           <label for="">Name</label>
                           <input type="text" name="name" class="form-control" value="{{ $car->name }}" readonly>
                       </div>
                       <div class="form-group">
                            <label for="">Colour</label>
                            <textarea name="colour" class="form-control" id="" readonly> {{ $car->colour }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Owner</label>
                            <input type="text" name="owner" class="form-control" value="{{ $car->owner_id }}" readonly>
                        </div>
                   {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
