@extends('layouts.app')

@section('title', 'Edit Employee')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Employee</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('employees.update', ['id' => $employee->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control"
                        value="{{ $employee->firstname }}" required>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control"
                        value="{{ $employee->lastname }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" id="age" class="form-control" value="{{ $employee->age }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <select name="position" id="position" class="form-select" required>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}"
                                {{ $employee->position_id == $position->id ? 'selected' : '' }}>
                                {{ $position->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
