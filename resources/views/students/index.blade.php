<x-layout>
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Student List - Master of IT</h1>
            <a href="{{ route('students.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add New Student
            </a>
        </div>

        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive mt-3">
            <table class="table table-bordered table-striped align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <img src="{{ asset('storage/' . $student->photo) }}"
                                     alt="Photo"
                                     class="rounded"
                                     style="width: 70px; height: 70px; object-fit: cover;">
                            </td>

                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="text-decoration-none fw-bold">
                                    {{ $student->last_name . ' ' . $student->first_name }}
                                </a>
                            </td>

                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->address }}</td>

                            <td>
                                <div class="d-flex justify-content-center gap-2">

                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary btn-sm">
                                        View
                                    </a>

                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('students.destroy', $student) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this student?');">

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-layout>
