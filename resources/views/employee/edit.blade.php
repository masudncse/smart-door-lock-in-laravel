@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h6>Edit</h6>
                </div>
                <div class="card-body pt-0 pb-2">
                    <form action="{{ route('employees.update', $employee->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{ $employee->id }}">
                        <input type="hidden" name="old_image" value="{{ $employee->image }}">

                        @include('employee._form')

                        <div class="row">
                            <div class="col-12 text-end mb-3">
                                <button type="submit" class="btn btn-info">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
