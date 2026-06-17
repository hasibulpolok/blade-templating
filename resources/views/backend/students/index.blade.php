@extends('backend.master')

@push('styles')
@endpush

@section('content')
<main class="dashboard-content">
    <div class="container-fluid px-2 px-md-3 px-lg-4 py-3 py-md-4">

        <div class="page-heading mb-4">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div class="d-flex align-items-start gap-3">
                    <span class="page-icon fs-3">
                        <i class="bi bi-table"></i>
                    </span>

                    <div>
                        <p class="eyebrow mb-1">Data</p>
                        <h1 class="h3 mb-1">Tables</h1>
                        <p class="text-muted mb-0">
                            Use responsive, searchable tables for operational records.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="card border-0 shadow-sm">
            <div class="card-body">

                <div class="row g-3 align-items-center mb-4">
                    <div class="col-12 col-lg-6">
                        <h2 class="h5 mb-1">
                            <i class="bi bi-table me-2"></i>
                            Advanced Table
                        </h2>
                        <p class="text-muted mb-0">
                            Searchable responsive table for orders and customer data.
                        </p>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="row g-2">
                            <div class="col-12 col-sm">
                                <input
                                    type="search"
                                    class="form-control"
                                    placeholder="Search orders"
                                    data-table-search="ordersTable"
                                    aria-label="Search orders">
                            </div>

                            <div class="col-12 col-sm-auto">
                                <a href="{{ url('student/create') }}" class="btn btn-primary w-100">
                                    <i class="bi bi-plus-circle me-1"></i>
                                    New Student
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-nowrap mb-0" id="ordersTable">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Student Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td class="fw-semibold">
                                    {{ $student->id }}
                                </td>

                                <td>
                                    <img
                                        src="../assets/images/ecommerce/product-1.jpg"
                                        alt="Student"
                                        class="img-fluid rounded-circle"
                                        width="50"
                                        height="50">
                                </td>

                                <td>{{ $student->name }}</td>

                                <td>
                                    <span class="badge bg-success">
                                        {{ $student->gender }}
                                    </span>
                                </td>

                                <td>{{ $student->phone }}</td>

                                <td>{{ $student->subject }}</td>

                                <td>
                                    <div class="d-flex flex-column flex-md-row justify-content-center gap-1">
                                        <button class="btn btn-info btn-sm text-white">
                                            <i class="bi bi-eye"></i>
                                            <span class="d-none d-md-inline">View</span>
                                        </button>

                                        <button class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i>
                                            <span class="d-none d-md-inline">Edit</span>
                                        </button>

                                        <button class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                            <span class="d-none d-md-inline">Delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </section>

    </div>
</main>
@endsection

@push('scripts')
@endpush