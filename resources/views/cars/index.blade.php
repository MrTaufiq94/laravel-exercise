@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if (session()->has('alert'))
                <div class="alert {{ session()->get('alert-type') }}">
                    {{ session()->get('alert') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Car List') }}
                    <div class="float-right">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control"/>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Colour</th>
                                <th>Owner</th>
                                <th>Created At</th>
                                <th>Created Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <td>{{$car->id}}</td>
                                    <td>{{$car->name}}</td>
                                    <td>{{$car->colour}}</td>
                                    <td>{{$car->owner_id}}</td>
                                    <td>{{$car->created_at ? $car->created_at->diffForHumans() : 'No Data'}}</td>
                                    <td>{{$car->created_at ?? 'No Data'}}</td>
                                    <td>
                                        <a href="{{ route('car:show', $car) }}" class="btn btn-primary">View</a> 
                                        <a href="{{ route('car:edit', $car) }}" class="btn btn-success">Edit</a>
                                        <a onclick = "return confirm('Are you sure ?')" href="{{ route('car:delete', $car) }}" class="btn btn-danger">Delete</a> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    {{-- <div style="text-align: center;"> --}}
                        {{-- {{ $cars->links() }} --}}
                        {{ $cars
                            ->appends([
                                'keyword' => request()->get('keyword')
                            ])
                            ->links() }}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
