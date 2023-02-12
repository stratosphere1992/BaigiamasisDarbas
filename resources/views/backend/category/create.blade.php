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
        <div class="row justify-content-center">
            <div class="col-md-10">
            <h3>Add Category</h3>
                <div class="card">
                    <div class="card-body">

                        <!-- Veiksmas: store metodas -->
                        <form class="forms-sample" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="name of category">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>

                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>

                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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