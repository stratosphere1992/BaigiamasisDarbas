@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('sidebar')
            <div class="col-md-9">

                <table class="table table-bordered">
                    
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Staus</th>
                            <th scope="col">Edit</th>
                            <th scope="col">View</th>
                            {{-- <th scope="col">Delete</th> --}}
                        </tr>
                    </thead>

                    @forelse($ads as $key =>$ad)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td><img src="{{ Storage::url($ad->feature_image) }}" width="130"></td>
                            <td>{{ $ad->name }}</td>
                            <td>EUR {{ $ad->price }} </td>
                            <td>
                                @if($ad->published ==1)
                                    <span class="badge" style="background-color: green;">Published</span>
                                @else
                                    <span class="badge" style="background-color: green;">Pending</span>
                                @endif
                            </td>
                            <td><button class="btn btn-primary">Edit</button></td>
                            <td><button class="btn btn-danger">View</button></td>
                        </tr>
                        @empty
                        <td>You have no ads</td>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>

@endsection