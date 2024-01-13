@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between pb-0">
                    <h6>All Employees</h6>
                    <a href="/employees/create" class="btn btn-primary mb-0">
                        Add New
                    </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    S/L
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Address
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Phone
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Modified
                                </th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($employees as $employee)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            {{ $employee->id }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <a href="{{ asset('storage/uploads/sumon.jpg') }}" target="_blank">
                                                    <img src="{{ asset('storage/uploads/sumon.jpg') }}"
                                                         class="avatar avatar-sm me-3" alt="user1">
                                                </a>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                <h6 class="mb-0 text-sm">{{ $employee->name }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $employee->email }}</p>
                                                <p class="text-xs text-secondary mb-0">{{ $employee->designation }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $employee->address }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">
                                            {{ $employee->phone }}
                                        </p>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        @if($employee->status === \App\Models\Employee::STATUS_ACTIVE)
                                            <span class="badge badge-sm bg-gradient-success">Active</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <span class="text-secondary text-xs font-weight-bold">
                                            {{ \Carbon\Carbon::parse($employee->modified_at)->format('m/d/Y') }}
                                            {{ \Carbon\Carbon::parse($employee->modified_at)->diffForHumans() }}
                                        </span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs ms-2"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
