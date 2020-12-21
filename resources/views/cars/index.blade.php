@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Car List') }}</div>

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
                        {{ $cars->links() }}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
