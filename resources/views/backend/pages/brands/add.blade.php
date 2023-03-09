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
            Add Brands
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->

   <!--Start row-->
   <div class="row">
    <div class="col-xl-9 mx-auto">
      <hr />
      <div class="card border-top border-0 border-4 border-info">
        <div class="card-body">
          <div class="border p-4 rounded">
            <div class="card-title d-flex align-items-center">
              <div>
                <i class="bx bx-fade-up-hover bxs-up-arrow-circle bx-md"></i>
              </div>
              <h5 class="mb-0 text-info"> Add New Brand</h5>
            </div>
            <hr />
          <form id="brandData" action="" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- cross site request forgecy --}}
            <div class="row mb-3">
                <label
                  for="name"
                  class="col-sm-3 col-form-label"
                  >Brand Name</label
                >
                <div class="col-sm-9">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter Brand Name"
                    value="{{old('name')}}"
                  />
                  <span class="text-danger spn-name"></span>
                  
                </div>
              </div>
              <div class="row mb-3">
                <label for="cat_id" class="col-sm-3 col-form-label"
                  >Category</label
                >
                <div class="col-sm-9">
                  <select name="cat_id" id="cat_id" class="form-control">
                    <option value="">----Select----</option>
                    @foreach ($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                  </select>
                  <span class="text-danger spn-category"></span>
                </div>
              </div>
              <div class="row mb-3">
                <label
                  for="image"
                  class="col-sm-3 col-form-label"
                  >Brand Image</label
                >
                <div class="col-sm-9">
                  <input
                    type="file"
                    class="form-control"
                    id="image"
                    name="image"
                  />
                  <span class="text-danger spn-brand-img"></span>
                </div>
              </div>
              <div class="row mb-3">
                <label
                  for="images"
                  class="col-sm-3 col-form-label"
                  >Gallery Images</label
                >
                <div class="col-sm-9">
                  <input
                    type="file"
                    class="form-control"
                    id="images"
                    name="images[]"
                    multiple
                  />
                  <span class="text-danger spn-brand-imgs"></span>
                </div>
              </div>

              <div class="row mt-3">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-info px-5">
                    Save
                  </button>
                </div>
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end row-->
@endsection
