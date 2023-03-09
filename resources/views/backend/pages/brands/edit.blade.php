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
           Update Brand
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->

   <!--Start row-->
   <div class="row">
    <div class="col-xl-6 ">
      <hr />
      <div class="card border-top border-0 border-4 border-info">
        <div class="card-body">
          <div class="border p-4 rounded">
            <div class="card-title d-flex align-items-center">
              <div>
                <i class="bx bx-fade-up-hover bxs-up-arrow-circle bx-md"></i>
              </div>
              <h5 class="mb-0 text-info"> Update Brand</h5>
            </div>
            <hr />
          <form action="{{route('updatebrand',$brand->id)}}" method="POST" enctype="multipart/form-data">
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
                    value="{{$brand->name}}"
                  />
                  @error('name')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                  
                </div>
              </div>
              <div class="row mb-3">
                <label for="cat_id" class="col-sm-3 col-form-label"
                  >Category</label
                >
                <div class="col-sm-9">
                  <select name="cat_id" id="cat_id" class="form-control">
                    <option value="{{$brand->cat_id}}">{{$brand->catinfo->name}}</option>
                    @foreach ($cats as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                  </select>
                  @error('cat_id')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-9">
                  <img height="100px" width="100px" src="{{asset('backend/assets/brand/'.$brand->image)}}" alt="">
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
                </div>
              </div>
              <div class="row mt-3">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-info px-5">
                    Update Brand
                  </button>
                </div>
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 ">
        <hr />
        <div class="card border-top border-0 border-4 border-info">
          <div class="card-body">
            <div class="border p-4 rounded">
              <div class="card-title d-flex align-items-center">
                <div>
                  <i class="bx bx-fade-up-hover bxs-up-arrow-circle bx-md"></i>
                </div>
                <h5 class="mb-0 text-info"> Update Brand Gallery</h5>
              </div>
              <hr />
              <div class="row">
                @foreach ($galleries as $gallery)
                <div class="col-6 p-2">
                    <img height="180px" width="180px" src="{{asset('backend/assets/brand/gallery/'.$gallery->images)}}" alt="">
                    <a href="{{route('deletegallery',$gallery->id)}}" class="btn btn-sm btn-danger mt-1 mx-5">Delete</a>
                </div>
                @endforeach
                <form action="{{route('updategallery',$brand->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-5 mb-3">
                        <label
                          for="images"
                          class="col-sm-3 col-form-label"
                          >Choose Images</label
                        >
                        <div class="col-sm-9">
                          <input
                            type="file"
                            class="form-control"
                            id="images"
                            name="images[]"
                            multiple
                          />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                          <button type="submit" class="btn btn-info px-5">
                           Add to Gallery
                          </button>
                        </div>
                      </div>
                </form>
            </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--end row-->
@endsection
