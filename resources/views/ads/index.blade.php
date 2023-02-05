@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('sidebar')
            <div class="col-md-9">
            @include('backend.inc.message')
            <div class="table-responsive">
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
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>

                    @forelse($ads as $key =>$ad)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>
                                <img src="{{ Storage::url($ad->feature_image) }}" width="130">
                            </td>
                            <td>{{ $ad->name }}</td>
                            <td>EUR {{ $ad->price }} </td>
                            <td>
                                @if($ad->published ==1)
                                    <span class="badge" style="background-color: green;">Published</span>
                                @else
                                    <span class="badge" style="background-color: green;">Pending</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('ads.edit',[$ad->id]) }}"><button class="btn btn-success">Edit</button></a>
                            </td>

                            <td>
                                <a target="_blank" href="{{ route('product.view',[$ad->id,$ad->slug]) }}"><button class="btn btn-success">View</button></a>
                            </td>

                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $ad->id }}">Delete</button>
                            

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $ad->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <form action="{{ route('ads.destroy',[$ad->id]) }}" method="post">@csrf
                            @method('DELETE')
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this item?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Yes, Delete it</button>
                                </div>
                                </div>
                                
                                </form>
                            </div>
                            </div>
                        </td>
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
</div>

@endsection