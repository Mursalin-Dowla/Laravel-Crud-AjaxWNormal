@extends('backend.master')
@section('main-content')
 <!--breadcrumb-->
 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Brands</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    View Brands
                </li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="row">
    <div class="col-md-6">
        <h4>Brand Information</h4>
        <h5 class="fw-bold">{{$brand->name}}</h5>
        <p>{{$brand->cat_id}}</p>
       <img src="{{asset('backend/assets/brand/'.$brand->image)}}" alt="">
    </div>
    <div class="col-md-6">
        <h4>Brand Gallery</h4>
        @foreach ($galleries as $gallery)
        <style>
            .gallery{
                position: relative;
                padding: 10px;
            }
            .btn-delete{
                position: absolute;
                top:0;
                
            }
        </style>
        <div class="gallery">
            <img src="{{asset('backend/assets/brand/gallery/'.$gallery->images)}}" alt="">
            <p class="btn-sm btn btn-danger btn-delete">X</p>
        </div>
        @endforeach
    </div>
</div>



@endsection