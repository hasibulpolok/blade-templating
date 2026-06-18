

@extends('backend.master')

@section('content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <div class="page-heading d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h3 mb-1">Edit Student</h1>
                <p class="text-muted mb-0">Update student information.</p>
            </div>

            <a href="{{ route('student.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @php
            $subjects = old('subject', json_decode($student->subject, true) ?? []);
        @endphp

        <form action="{{ route('student.update', $student->id) }}" method="POST" class="card shadow-sm border-0">

            @csrf
            @method('PUT')

            <div class="card-header bg-white py-3">
                <h5 class="mb-0">Student Information</h5>
            </div>

            <div class="card-body p-4">
                <div class="row g-4">

                    <!-- Name -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Full Name</label>
                        <input type="text"
                            name="name"
                            class="form-control"
                            value="{{ old('name', $student->name) }}">
                    </div>

                    <!-- Gender -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold d-block mb-2">Gender</label>

                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input"
                                    type="radio"
                                    name="gender"
                                    value="male"
                                    {{ old('gender', $student->gender) == 'male' ? 'checked' : '' }}>
                                <label class="form-check-label">Male</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input"
                                    type="radio"
                                    name="gender"
                                    value="female"
                                    {{ old('gender', $student->gender) == 'female' ? 'checked' : '' }}>
                                <label class="form-check-label">Female</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input"
                                    type="radio"
                                    name="gender"
                                    value="others"
                                    {{ old('gender', $student->gender) == 'others' ? 'checked' : '' }}>
                                <label class="form-check-label">Others</label>
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Phone Number</label>
                        <input type="text"
                            name="phone"
                            class="form-control"
                            value="{{ old('phone', $student->phone) }}">
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Email Address</label>
                        <input type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email', $student->email) }}">
                    </div>

                    <!-- District -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">District</label>

                        <select name="district" class="form-select">
                            <option value="">Select District</option>

                            <option value="Dhaka"
                                {{ old('district', $student->district) == 'Dhaka' ? 'selected' : '' }}>
                                Dhaka
                            </option>

                            <option value="Nilphamari"
                                {{ old('district', $student->district) == 'Nilphamari' ? 'selected' : '' }}>
                                Nilphamari
                            </option>

                            <option value="Rangpur"
                                {{ old('district', $student->district) == 'Rangpur' ? 'selected' : '' }}>
                                Rangpur
                            </option>

                            <option value="Rajshahi"
                                {{ old('district', $student->district) == 'Rajshahi' ? 'selected' : '' }}>
                                Rajshahi
                            </option>

                            <option value="Gaibandha"
                                {{ old('district', $student->district) == 'Gaibandha' ? 'selected' : '' }}>
                                Gaibandha
                            </option>

                            <option value="Barishal"
                                {{ old('district', $student->district) == 'Barishal' ? 'selected' : '' }}>
                                Barishal
                            </option>
                        </select>
                    </div>

                    <!-- Subjects -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold d-block">Subjects</label>

                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox"
                                name="subject[]"
                                value="Web Development"
                                {{ in_array('Web Development', $subjects) ? 'checked' : '' }}>
                            <label class="form-check-label">Web Development</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox"
                                name="subject[]"
                                value="Graphics Design"
                                {{ in_array('Graphics Design', $subjects) ? 'checked' : '' }}>
                            <label class="form-check-label">Graphics Design</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox"
                                name="subject[]"
                                value="Digital Marketing"
                                {{ in_array('Digital Marketing', $subjects) ? 'checked' : '' }}>
                            <label class="form-check-label">Digital Marketing</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox"
                                name="subject[]"
                                value="Office Application"
                                {{ in_array('Office Application', $subjects) ? 'checked' : '' }}>
                            <label class="form-check-label">Office Application</label>
                        </div>
                    </div>

                    

                </div>
            </div>

            <div class="card-footer bg-white py-3">
                <div class="d-flex justify-content-end gap-2">

                    <a href="{{ route('student.index') }}" class="btn btn-danger">
                        Cancel
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Update Student
                    </button>

                </div>
            </div>
        </form>

    </div>
</main>
@endsection