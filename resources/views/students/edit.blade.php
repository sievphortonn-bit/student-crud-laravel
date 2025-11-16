<x-layout>
    <h1>Edit Student</h1>
    @if ($errors->any())
    <div class="alert alert-warning" role="alert">
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
       
    @endif
    <form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
        <x-students.form-edit :student="$student" />
    </form>
</x-layout>
