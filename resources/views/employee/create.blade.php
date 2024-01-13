@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h6>Add New</h6>
                </div>
                <div class="card-body pt-0 pb-2">
                    <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        @include('employee._form')

                        <div class="row">
                            <div class="col-12 text-end mb-3">
                                <button type="reset" class="btn btn-secondary me-1">
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
