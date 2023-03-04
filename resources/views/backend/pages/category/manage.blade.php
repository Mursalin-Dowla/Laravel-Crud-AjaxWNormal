@extends('backend.master')
@section('main-content')
 <!--breadcrumb-->
 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Manage Category
                </li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#add">
            <div class="font-22 text-white">
                <i class="lni lni-circle-plus"></i>
            </div>
        </button>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Cat. Name</th>
                        <th>Cat. Des</th>
                        <th>Cat. Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="tData">

                </tbody>
            </table>
        </div>
    </div>        
</div>
{{-- Add Model --}}
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mt-3">
                    <label for="cat-name">Cat. Name</label>
                    <input type="text" id="cat-name" placeholder="Enter Category Name" class="cat-name form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="cat-des">Cat. Description</label>
                    <input type="text" id="cat-des" placeholder="Enter Category Description" class="cat-des form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="cat-status">Cat. Status</label>
                    <select id="cat-status" class="cat-status form-control">
                        <option value="">---Select---</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="cat-add btn btn-primary">Save New Category</button>
            </div>
        </div>
    </div>
</div>

<!--Delete Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Please Confirm</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="text-warning">Delete This Category?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn-confirm-delete btn btn-danger">Yes</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Update Model --}}
<div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mt-3">
                    <label for="cat-up-name">Cat. Name</label>
                    <input type="text" id="cat-up-name" placeholder="Enter Category Name" class="cat-up-name form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="cat-up-des">Cat. Description</label>
                    <input type="text" id="cat-up-des" placeholder="Enter Category Description" class="cat-up-des form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="cat-up-status">Cat. Status</label>
                    <select id="cat-up-status" class="cat-up-status form-control">
                        <option value="">---Select---</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn-update btn btn-primary">Update Category</button>
            </div>
        </div>
    </div>
</div>
@endsection