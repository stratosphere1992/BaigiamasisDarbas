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
        <h4>Manage Childcategory</h4>
        <div class="row justify-content-center">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Subcategory</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Kategorijų lentelė -->
                                    @forelse($childcategories as $childcategory)
                                    <tr>
                                        
                                        <td class="categrory_{{$childcategory->subcategory_id}}">{{$childcategory->subcategory->name}}</td>
                                        <td>{{ $childcategory->name }}</td>
                                        <td>
                                            <a href="{{route('childcategory.edit',[$childcategory->id])}}"><button class="btn btn-sm btn-info"><i class="mdi mdi-table-edit"></i></button>
                                            </a>
                                        </td>
                                        <td>
                                            
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$childcategory->id}}">
                                            <i class="mdi mdi-delete"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$childcategory->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{route('childcategory.destroy',$childcategory->id)}}" method="post">@csrf 
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
                                    </tr>
                                    @empty
                                    <td>No subcategory to display</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Stilius lentelės kategorijai -->
        <style>
            td.category_17 {background-color: aliceblue;}
            td.category_18 {background-color: bisque;}
            td.category_19 {background-color: darkgrey;}
        </style>
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