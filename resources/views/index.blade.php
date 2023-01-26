@extends('layouts.app')
@section('content')

<!-- Pagrindionio puslapio karuselė -->
<div class="slider" style="margin-top: -25px">
<!-- Kortelių ketimasis aktyvuotas su data-bs-ride="carousel", pridėta 7s intervalas -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="/slider/slider1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/slider/slider2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="/slider/slider3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
<!-- Karsulėlė produktams -->
<div class="container mt-5">
    <span>
        <h1>Guitars</h1>
        <!-- Float-right neveikia -->
        <a href="#" class="float-right">View all</a>
    </span>
    <!-- Kortelių ketimasis aktyvuotas su data-bs-ride="carousel" -->
    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-3">
                    <img src="/product/product1.jpg" class="img-thumbnail" alt="...">
                    <p class="text-center card-footer" style="color: #222;">Name of product/$1000</p>
                </div>
                <div class="col-3">
                    <img src="/product/product1.jpg" class="img-thumbnail" alt="...">
                    <p class="text-center card-footer" style="color: #222;">Name of product/$1000</p>
                </div>
                <div class="col-3">
                    <img src="/product/product1.jpg" class="img-thumbnail" alt="...">
                    <p class="text-center card-footer" style="color: #222;">Name of product/$1000</p>
                </div>
                <div class="col-3">
                    <img src="/product/product1.jpg" class="img-thumbnail" alt="...">
                    <p class="text-center card-footer" style="color: #222;">Name of product/$1000</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-3">
                    <img src="/product/product2.jpg" class="img-thumbnail" alt="...">
                    <p class="text-center card-footer" style="color: #222;">Name of product/$1000</p>
                </div>
                <div class="col-3">
                    <img src="/product/product2.jpg" class="img-thumbnail" alt="...">
                    <p class="text-center card-footer" style="color: #222;">Name of product/$1000</p>
                </div>
                <div class="col-3">
                    <img src="/product/product2.jpg" class="img-thumbnail" alt="...">
                    <p class="text-center card-footer" style="color: #222;">Name of product/$1000</p>
                </div>
                <div class="col-3">
                    <img src="/product/product2.jpg" class="img-thumbnail" alt="...">
                    <p class="text-center card-footer" style="color: #222;">Name of product/$1000</p>
                </div>
            </div>
        </div>
</div>
@endsection
