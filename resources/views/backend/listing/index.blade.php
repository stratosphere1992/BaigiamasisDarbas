<!-- Šiam puspaliui extend nesuveikia, nepakrauna stiliaus, pavyko ištaisyti panaudojus asset -->
<link rel="stylesheet" href="{{ asset('admin/template/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/template/vendors/base/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset('admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('admin/template/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('admin/template/images/favicon.png') }}">

@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Pranešimas apie ištrintą įrašą -->
        @include('backend.inc.message')
        <h4>Manage Advertisements</h4>
        <div class="row justify-content-center">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Seller</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                        <th>Published</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Kategorijų lentelė -->
                                    @forelse($ads as $ad)
                                    <tr>
                                        <td>
                                            @if($ad->user->avatar)
                                                <img src="{{ Storage::url($ad->user->avatar) }}" width="120">
                                            @else
                                                <img src="/img/man.jpg" width="120">
                                            @endif
                                            <a target="_blank" href="{{ route('show.user.ads', $ad->user->id) }}">{{ $ad->user->name }}</a>
                                        </td>

                                        <td><img src="{{Storage::url($ad->feature_image)}}"></td>
                                        <td>{{$ad->name}}</td>

                                        <td>
                                            <a target="_blank" href="{{ route('product.view',[$ad->id,$ad->slug]) }}"><button class="btn btn-success">View</button></a>
                                        </td>

                                        <td>
                                            
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$ad->id}}">
                                            Delete <i class="mdi mdi-delete"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$ad->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{route('ads.destroy',$ad->id)}}" method="post">@csrf 
                                                @method('DELETE')
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Once deleted can never be recovered.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                                </div>
                                                </form>
                                            </div>
                                            </div>
                                        </td>

                                        <td>
                                            {{$ad->created_at->format('Y-m-d')}}
                                        </td>

                                    </tr>
                                    @empty
                                    <td>No ads to display</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{ $ads->links() }}
        </div>
@endsection

<!-- Šiam puspaliui extend nesuveikia, nepakrauna stiliaus, pavyko ištaisyti panaudojus asset -->
<script src="{{ asset('admin/template/vendors/base/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('admin/template/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/template/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('admin/template/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/template/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/template/js/template.js') }}"></script>
<script src="{{ asset('admin/template/js/dashboard.js') }}"></script>
<script src="{{ asset('admin/template/js/data-table.js') }}"></script>
<script src="{{ asset('admin/template/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/template/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('admin/template/js/jquery.cookie.js" type="text/javascript') }}"></script>