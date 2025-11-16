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

        <div class="row g-4 mt-2">
            @foreach ($students as $student)
                <div class="col-md-4">
                    <div class="card shadow-sm border">
                        <img src="{{ asset('storage/' . $student->photo) }}" class="card-img-top" alt="Student photo"
                            style="height: 200px; object-fit: cover;">

                        <div class="card-body border-top">
                            <h5 class="card-title">
                                <a href="{{ route('students.show', $student->id) }}" class="text-decoration-none">
                                    {{ $student->last_name . ' ' . $student->first_name }}
                                </a>
                            </h5>

                            <p class="mb-1"><strong>Gender:</strong> {{ $student->gender }}</p>
                            <p class="mb-1"><strong>Address:</strong> {{ $student->address }}</p>

                            <div class="d-flex gap-2">
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student) }}" method="post"
                                    onsubmit="return confirm('Are you sure you want to delete this student?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
