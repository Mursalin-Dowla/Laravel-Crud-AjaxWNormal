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
                        Manage Brands
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <!--Start row-->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sl Num</th>
                            <th>Brand Name</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>{{ $brand->catinfo->name }}</td>
                                <td>
                                    <img width="100px" height="75px" src="{{asset('backend/assets/brand/'.$brand->image)}}" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('viewbrand', $brand->id) }}" class="btn btn-success btn-sm">view</a>
                                    <a href="{{route('editbrand', $brand->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"  data-bs-target="#delete{{$brand->id}}">Delete</button>                               
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$brand->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-warning" id="exampleModalLabel">Delete Confirmation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                           <h6 class="text-info fw-bold">This item will be deleted parmanently</h6>
                                           <h6>Confirm Delete?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                data-bs-dismiss="modal">Close</button>
                                                <a href="{{route('deletebrand', $brand->id)}}"  class="btn btn-danger btn-sm">Delete</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl Num</th>
                            <th>Brand Name</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!--end row-->
@endsection
