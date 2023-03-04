@extends('backend.master')
@section('main-content')
 <!--breadcrumb-->
 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Product</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item">
            <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Edit Product
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
              <h5 class="mb-0 text-info">Update Product</h5>
            </div>
            <hr />
          <form action="{{ route('updateproduct', $product->id) }}" method="POST">
            @csrf
            {{-- cross site request forgecy --}}
            <div class="row mb-3">
                <label
                  for="name"
                  class="col-sm-3 col-form-label"
                  >Product Name</label
                >
                <div class="col-sm-9">
                  <input
                   value="{{$product->name}}"
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter Product Name"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label for="des" class="col-sm-3 col-form-label"
                  >Description</label
                >
                <div class="col-sm-9">
                  <input
                  value="{{$product->des}}"
                    type="text"
                    class="form-control"
                    id="des"
                    name="des"
                    placeholder="Add Product Description"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label
                  for="price"
                  class="col-sm-3 col-form-label"
                  >Price</label
                >
                <div class="col-sm-9">
                  <input
                  value="{{$product->price}}"
                    type="text"
                    class="form-control"
                    id="price"
                    name="price"
                    placeholder="Product Price"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label
                  for="quantity"
                  class="col-sm-3 col-form-label"
                  >Quantity</label
                >
                <div class="col-sm-9">
                  <input
                   value="{{$product->quantity}}"
                    type="text"
                    class="form-control"
                    id="quantity"
                    name="quantity"
                    placeholder="Add Quantity"
                  />
                </div>
              </div>
              <div class="row mb-3">
                <label
                  for="status"
                  class="col-sm-3 col-form-label"
                  >Status</label
                >
                <div class="col-sm-9">
                  <select name="status" id="status" class="form-control">
                      <option value="">----Select----</option>
                      <option value="1" @if ($product->status==1) selected 
                          
                      @endif>Active</option>
                      <option value="2" @if ($product->status==2) selected 
                          
                      @endif>Inactive</option>
                  </select>
              </div>
              <div class="row mt-3">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-info px-5">
                    Update
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
