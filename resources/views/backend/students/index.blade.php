@extends('backend.master')

@push('styles')
   
@endpush

@section('content')
     <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Data</p>
                <h1 class="h3 mb-1">Tables</h1>
                <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p>
              </div>
            </div>
            
          </div>

          <section class="panel">

    <!-- Top Bar -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2 mb-3">

        <div>
            <h2 class="h5 mb-1 section-title">
                <i class="bi bi-table"></i>
                <span>Advanced Table</span>
            </h2>
            <p class="text-muted mb-0">
                Searchable responsive table for orders and customer data.
            </p>
        </div>

        <div class="d-flex flex-column flex-sm-row gap-2">
            <input
                class="form-control form-control-sm"
                type="search"
                placeholder="Search orders"
                data-table-search="ordersTable"
                aria-label="Search orders">

            <a href="{{ url('student/create') }}" class="btn btn-primary">
                New Student
            </a>
        </div>

    </div>

    <!-- Responsive Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle mb-0" id="ordersTable">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Student Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="fw-semibold">{{ $student->id }}</td>

                    <td>
                        <img
                            src="../assets/images/ecommerce/product-1.jpg"
                            alt="Student"
                            class="img-fluid rounded"
                            style="width:50px;height:50px;object-fit:cover;">
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
                        <div class="d-flex flex-wrap gap-1">
                            <button class="btn btn-sm btn-info text-white">
                                View
                            </button>

                            <button class="btn btn-sm btn-warning">
                                Edit
                            </button>

                            <button class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</section>
        </div>
      </main>
@endsection

@push('scripts')
    
@endpush
