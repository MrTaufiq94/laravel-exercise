@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Car') }}</div>

                <div class="card-body">
                   <form action="" method="post">
                       @csrf
                       <div class="form-group">
                           <label for="">Name</label>
                           <input type="text" name="name" class="form-control">
                       </div>
                       <div class="form-group">
                            <label for="">Colour</label>
                            <input type="text" name="colour" class="form-control">
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Owner</label>
                            <input type="text" name="owner" class="form-control">
                        </div> --}}
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
