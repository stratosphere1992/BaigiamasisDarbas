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
        <h3>Update Childcategory</h3>
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card">
                    <div class="card-body">

                        <!-- Veiksmas: store metodas. Enctype nėra būtinas, nes nėra naudojami paveikslėliai -->
                        <form class="forms-sample" action="{{ route('childcategory.update',[$childcategory->id]) }}" method="post">@csrf
                            @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $childcategory->name }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                            </div>
                            <!-- "Dropdown menu" kategorijoms pasirinkti -->
                            <div class="form-group">
                                    <label for="name">Choose subcategory</label>
                                    <select class="form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id">
                                        <option value="">Select subcategory</option>
                                        @foreach (App\Models\Subcategory::all() as $subcategory)
                                            <!-- Nustatyta, kad korekcijos metu būtų parinkta teisinga kategorija -->
                                            <option value="{{ $subcategory->id }}" {{$childcategory->subcategory_id == $subcategory->id ? 'selected':''}} >{{ $subcategory->name }}</option>Í
                                        @endforeach
                                    </select>
                                    @error('subcategory_id')
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