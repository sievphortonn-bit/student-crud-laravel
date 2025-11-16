<x-layout>
    <div class="container d-flex flex-column justify-content-center align-items-center" 
         style="min-height: 80vh;">

        <div class="text-center">

            <h1 class="fw-bold display-4 mb-3">
                MIT Student Management System
            </h1>

            <p class="lead text-muted mb-4" style="max-width: 600px; margin: auto;">
                Easily manage student information, update profiles, and view details in a clean and simple dashboard.
            </p>

            <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg px-5 py-2 shadow">
                <i class="bi bi-people-fill me-2"></i> View Students
            </a>

        </div>

    </div>
</x-layout>
