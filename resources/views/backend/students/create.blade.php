@extends('backend.master')

@push('styles')
@endpush

@section('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">

            <div class="page-heading d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center gap-3">
                    <span class="page-icon fs-3 text-primary">
                        <i class="bi bi-person-plus-fill"></i>
                    </span>

                    <div>
                        <p class="text-uppercase text-muted small mb-1">Student Management</p>
                        <h1 class="h3 mb-1">Add Student</h1>
                        <p class="text-muted mb-0">
                            Create a new student profile and save it to the database.
                        </p>
                    </div>
                </div>

                <a href="{{ url('/students') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <form action="" method="POST" class="card shadow-sm border-0">
                        @csrf

                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">
                                <i class="bi bi-person-vcard me-2"></i>
                                Student Information
                            </h5>
                        </div>

                        <div class="card-body p-4">

                            <div class="row g-4">


                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Full Name
                                    </label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter full name"
                                        required>
                                </div>

                                <!-- Gender -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold d-block mb-2">
                                        Gender
                                    </label>

                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="male" checked>
                                            <label class="form-check-label" for="male">
                                                Male
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="female">
                                            <label class="form-check-label" for="female">
                                                Female
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="others"
                                                value="others">
                                            <label class="form-check-label" for="others">
                                                Others
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Phone Number
                                    </label>
                                    <input type="tel" name="phone" class="form-control" placeholder="01XXXXXXXXX"
                                        required>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        Email Address
                                    </label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="example@email.com">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">
                                        District
                                    </label>

                                    <select name="district" class="form-select">
                                        <option value="">Select District</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Nilphamari">Nilphamari</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                    </select>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label fw-semibold d-block">
                                        Subjects
                                    </label>

                                    <div class="col">

                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="subject[]"
                                                    id="webDevelopment" value="Web Development">
                                                <label class="form-check-label" for="webDevelopment">
                                                    Web Development
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="subject[]"
                                                    id="graphicsDesign" value="Graphics Design">
                                                <label class="form-check-label" for="graphicsDesign">
                                                    Graphics Design
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6 mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="subject[]"
                                                    id="digitalMarketing" value="Digital Marketing">
                                                <label class="form-check-label" for="digitalMarketing">
                                                    Digital Marketing
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-6 mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="subject[]"
                                                    id="officeApplication" value="Office Application">
                                                <label class="form-check-label" for="officeApplication">
                                                    Office Application
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-12">
                                    <label class="form-label fw-semibold">
                                        Note
                                    </label>
                                    <textarea name="note" class="form-control" rows="4" placeholder="Your Message"></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="card-footer bg-white py-3">
                            <div class="d-flex justify-content-end gap-2">

                                <button type="button" class="btn btn-danger">
                                    <i class="bi bi-x-circle me-1"></i>
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-1"></i>
                                    Create Student
                                </button>

                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </main>
@endsection

@push('scripts')
@endpush
