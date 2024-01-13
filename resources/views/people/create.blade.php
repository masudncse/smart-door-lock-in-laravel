@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h6>Add New</h6>
                </div>
                <div class="card-body pt-0 pb-2">
                    <form action="/people" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="designation" class="form-label">Designation</label>
                                <select name="designation" id="designation" class="form-select">
                                    <option selected>Select</option>
                                    <option value="Chief Technical Office">Chief Technical Office</option>
                                    <option value="Software Engineer">Software Engineer</option>
                                    <option value="Sr. Software Engineer">Sr. Software Engineer</option>
                                    <option value="Wordpress Developer">Wordpress Developer</option>
                                    <option value="Graphics Designer">Graphics Designer</option>
                                    <option value="Database Administrator">Database Administrator</option>
                                    <option value="System Designer">System Designer</option>
                                    <option value="System Analyst">System Analyst</option>
                                    <option value="Content Writer">Content Writer</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="designation" class="form-label">Status</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" value="1" id="isActive">
                                    <label class="form-check-label" for="isActive">Is Active</label>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea name="address" id="address" class="form-control" rows="5"
                                          placeholder="Address"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="col-12 text-end mb-3">
                                <button type="submit" class="btn btn-secondary me-1">
                                    Reset
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
