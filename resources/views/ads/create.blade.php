@extends('layouts.app')
@section('content')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <div class="card">
                <div class="card-body">
                    <img src="/img/man.jpg" class="mx-auto d-block img-thumbnail" width="130">
                    <p class="text-center"><b>Mr. User</b></p>
                </div>
                <hr style="border:2px solid green">
                <div class="vertical-menu">
                    <a href="">Dashboard</a>
                    <a href="">Profile</a>
                    <a href="">Create ads</a>
                    <a href="">Published ads</a>
                    <a href="">Pending ads</a>
                    <a href="">Message</a>
                </div>
            </div>
        </div>
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
                        <div class="d-flex flex-row align-items-center flex-wrap mt-2">
                            <div class="col-md-4">
                                <select class="form-select" name="category_id">
                                    <option value="">choose category</option>
                                    @foreach(App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                            <select class="form-select" name="subcategory_id">
                                    <option value="">choose subcategory</option>
                                    @foreach(App\Models\Subcategory::all() as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                            <select class="form-select ml-1" name="childcategory_id">
                                    <option value="">choose childcategory</option>
                                    @foreach(App\Models\Childcategory::all() as $childcategory)
                                    <option value="{{ $childcategory->id }}">{{ $childcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

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
                        <div class="d-flex flex-row align-items-center flex-wrap mt-2">
                            <div class="col-md-4">
                                <select class="form-select" name="country_id">
                                    <option value="">Select country</option>
                                    @foreach(App\Models\Country::all() as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                            <select class="form-select" name="state_id">
                                    <option value="">Select state</option>
                                    @foreach(App\Models\State::all() as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                            <select class="form-select ml-1" name="city_id">
                                    <option value="">Select city</option>
                                    @foreach(App\Models\City::all() as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

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

<style>
    .vertical-menu a{
        background-color: #fff;
        color: #000;
        display: block;
        padding: 12px;
        text-decoration: none;
    }
    .vertical-menu a:hover{
        background-color: green;
        color: #fff;
    }
</style>
@endsection
