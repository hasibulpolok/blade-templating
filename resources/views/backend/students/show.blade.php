
@extends('backend.master')

@section('content')

<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <!-- Page Heading -->
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-person-badge"></i>
                </span>
                <div>
                    <p class="eyebrow mb-1">Student Management</p>
                    <h1 class="h3 mb-1">Student Profile</h1>
                    <p class="text-muted mb-0">
                        View student information and details.
                    </p>
                </div>
            </div>
        </div>

        <section class="row g-3">

            <!-- Left Side Profile -->
            <div class="col-12 col-xl-4">
                <div class="panel h-100 text-center profile-card">

                    <div class="profile-cover">
                        <img
                            src="https://via.placeholder.com/600x200"
                            alt="Cover"
                            class="img-fluid w-100">
                    </div>

                    @if(!empty($student->image))
                        <img
                            class="avatar-img avatar-xl profile-photo"
                            src="{{ asset('uploads/students/'.$student->image) }}"
                            alt="{{ $student->name }}">
                    @else
                        <img
                            class="avatar-img avatar-xl profile-photo"
                            src="https://via.placeholder.com/120"
                            alt="Student">
                    @endif

                    <h2 class="h5 mt-3 mb-1">
                        {{ $student->name }}
                    </h2>

                    <p class="text-muted mb-3">
                        Student
                    </p>

                    <div class="d-flex justify-content-center gap-2">
                        <span class="badge text-bg-primary">
                            Active
                        </span>
                    </div>

                    <div class="info-list mt-4 text-start">

                        <div class="mb-2">
                            <span>Name</span><br>
                            <strong>{{ $student->name }}</strong>
                        </div>

                        <div class="mb-2">
                            <span>Email</span><br>
                            <strong>{{ $student->email }}</strong>
                        </div>

                        <div class="mb-2">
                            <span>Phone</span><br>
                            <strong>{{ $student->phone ?? 'N/A' }}</strong>
                        </div>

                        <div class="mb-2">
                            <span>Address</span><br>
                            <strong>{{ $student->address ?? 'N/A' }}</strong>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Right Side Details -->
            <div class="col-12 col-xl-8">
                <div class="panel">

                    <div class="panel-header mb-4">
                        <div>
                            <h2 class="h5 mb-1">
                                <i class="bi bi-person-lines-fill"></i>
                                Student Details
                            </h2>

                            <p class="text-muted mb-0">
                                Complete information about the student.
                            </p>
                        </div>
                    </div>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">Student Name</label>
                            <input type="text"
                                   class="form-control"
                                   value="{{ $student->name }}"
                                   readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="email"
                                   class="form-control"
                                   value="{{ $student->email }}"
                                   readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <input type="text"
                                   class="form-control"
                                   value="{{ $student->phone }}"
                                   readonly>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Student ID</label>
                            <input type="text"
                                   class="form-control"
                                   value="{{ $student->id }}"
                                   readonly>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Address</label>
                            <textarea class="form-control"
                                      rows="4"
                                      readonly>{{ $student->address }}</textarea>
                        </div>

                    </div>

                    <div class="mt-4 d-flex justify-content-end">

                        <a href="{{ route('student.index') }}"
                           class="btn btn-secondary me-2">
                            Back
                        </a>

                        <a href="{{ route('student.edit', $student->id) }}"
                           class="btn btn-primary">
                            Edit Student
                        </a>

                    </div>

                </div>
            </div>

        </section>

    </div>
</main>

@endsection

