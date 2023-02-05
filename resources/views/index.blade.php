@extends('layouts.app')
@section('content')

<!-- Pagrindionio puslapio karuselė -->
<div class="slider" style="margin-top: -25px">
<!-- Kortelių ketimasis aktyvuotas su data-bs-ride="carousel", pridėta 7s intervalas -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="/slider/slider1.png" class="d-block w-100" style="min-height: 300px">
        </div>
        <div class="carousel-item">
        <img src="/slider/slider2.png" class="d-block w-100" style="min-height: 300px">
        </div>
        <div class="carousel-item">
        <img src="/slider/slider3.png" class="d-block w-100" style="min-height: 300px">
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
        <a href="{{ route('category.show',$category->slug) }}" class="float-right">View all</a>

    </span>
    <!-- Kortelių ketimasis aktyvuotas su data-bs-ride="carousel" -->
    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                @forelse($firstAds as $firstad)
                {{-- <a href="{{ route('product.view',[$firstad->id,$firstad->slug]) }}"></a> --}}
                <div class="col-3">
                    <a href="{{ route('product.view',[$firstad->id,$firstad->slug]) }}"><img src="{{ Storage::url($firstad->feature_image) }}" class="img-thumbnail"></a>
                    <p class="text-center card-footer" style="color: #222;">{{ $firstad->name }} / {{ $firstad->price }} EUR</p>
                </div>
                @empty
                @endforelse
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
            @forelse($secondsAds as $secondsad)
                <div class="col-3">
                    <a href="{{ route('product.view',[$secondsad->id,$secondstad->slug]) }}"><img src="{{ Storage::url($secondsad->feature_image) }}" class="img-thumbnail"></a>
                    <p class="text-center card-footer" style="color: #222;">{{ $secondsad->name }} / {{ $secondsad->price }} EUR</p>
                </div>
                @empty
                @endforelse
            </div>
        </div>
</div>



<div class="container mt-5">
    <span>
        <h1>Amps</h1>
        <!-- Float-right neveikia -->
        <a href="{{ route('category.show',$categoryAmps->slug) }}" class="float-right">View all</a>

    </span>
    <!-- Kortelių ketimasis aktyvuotas su data-bs-ride="carousel" -->
    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                @forelse($firstAdsForAmps as $firstAdsForAmp)
                {{-- <a href="{{ route('product.view',[$firstad->id,$firstad->slug]) }}"></a> --}}
                <div class="col-3">
                    <a href="{{ route('product.view',[ $firstAdsForAmp->id,$ $firstAdsForAmp->slug]) }}"><img src="{{ Storage::url( $firstAdsForAmp->feature_image) }}" class="img-thumbnail"></a>
                    <p class="text-center card-footer" style="color: #222;">{{  $firstAdsForAmp->name }} / {{  $firstAdsForAmp->price }} EUR</p>
                </div>
                @empty
                @endforelse
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
            @forelse($secondsAdsForAmps as $secondsAdsForAmp)
                <div class="col-3">
                    <a href="{{ route('product.view',[$secondsAdsForAmp->id,$secondsAdsForAmp->slug]) }}"><img src="{{ Storage::url($secondsAdsForAmp->feature_image) }}" class="img-thumbnail"></a>
                    <p class="text-center card-footer" style="color: #222;">{{ $secondsAdsForAmp->name }} / {{ $secondsAdsForAmp->price }} EUR</p>
                </div>
                @empty
                @endforelse
            </div>
        </div>
</div>



@endsection
