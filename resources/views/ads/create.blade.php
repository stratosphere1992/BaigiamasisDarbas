@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        @include('sidebar')

        <div class="col-md-9">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @foreach ($errors->all() as $errorMessage)
                    <li>{{ $errorMessage }}</li>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('ads.store') }}" method="post" enctype="multipart/form-data">@csrf

            <div class="card">
                <div class="card-header text-white" style="background-color: green">
                    Post your ad.
                </div>
                    <div class="card-body">
                        <label for="file"><b>Upload 3 Images</b></label>
                        <div class="d-flex flex-column mt-2">
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" name="feature_image" accept="image/*"> 
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" name="first_image" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" name="second_image" accept="image/*">
                            </div>
                        </div>

                        <label class="mt-2" for="file"><b>Choose category</b></label>
                        <category-component></category-component>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price status</label>
                            <select class="form-control" name="price_status">
                                <option value="negoitable">Negoitable</option>
                                <option value="fixed">Fixed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Product Condition</label>
                            <select class="form-control" name="product_condition">
                                <option value="">Select</option>
                                <option value="brandnew">Brand New</option>
                                <option value="used">Used</option>
                                <option value="heavilyused">Heavily Used</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="location">Listing Location</label>
                            <input type="text" class="form-control" name="listing_location">
                        </div>

                        <label class="mt-2" for="file"><b>Choose address</b></label>
                        <adress-component></adress-component>
                        <div class="form-group">
                            <label for="location">Seller contact number</label>
                            <input type="number" class="form-control" name="phone_number">
                        </div>

                        <div class="form-group">
                            <label for="location">Demo link of product</label>
                            <input type="text" class="form-control" name="link">
                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-success" type="submit">Publish</button>
                        </div>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
