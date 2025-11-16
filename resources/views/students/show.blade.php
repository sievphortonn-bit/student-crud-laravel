<x-layout>
    <div class="container mt-4">

        <div class="card shadow-lg border-0 mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0 text-center">
                    {{ $student->last_name . " " . $student->first_name }}
                </h3>
            </div>

            <div class="card-body text-center">

                <img 
                    src="{{ asset('storage/' . $student->photo) }}" 
                    alt="Student photo" 
                    class="img-fluid rounded mb-3"
                    style="max-height: 300px; object-fit: cover;"
                >
                <div class="border-top">
                    <p class="fs-5"><strong>Gender:</strong> {{ $student->gender }}</p>
                    <p class="fs-5"><strong>Address:</strong> {{ $student->address }}</p>

                    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">
                        Back to Student List
                    </a>
                </div>
                
            </div>
        </div>

    </div>
</x-layout>
