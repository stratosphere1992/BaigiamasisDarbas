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
            <div class="card">
                <div class="card-header text-white" style="background-color: green">
                    Post your ad.
                </div>
                    <div class="card-body">
                        <label for="file"><b>Upload 3 Images</b></label>
                        <div class="d-flex flex-column mt-2">
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <!-- <div class="col-md-4">
                                <input type="file" name="">
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="">
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="">
                            </div> -->
                        </div>
                        <label class="mt-2" for="file"><b>Choose category</b></label>
                        <div class="d-flex flex-row align-items-center flex-wrap mt-2">
                            <div class="col-md-4">
                                <select class="form-select" name="">
                                    <option value="">choose category</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                            <select class="form-select" name="">
                                    <option value="">choose subcategory</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                            <select class="form-select" name="">
                                    <option value="">choose childcategory</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
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
