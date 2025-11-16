<x-layout>
    <h1>Insert New Student</h1>
    <x-errors />
    <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
        <x-students.form />
    </form>
    <script>
        function previewImage(event) {
            const output = document.getElementById('preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src); // free memory
            }
        }
    </script>
</x-layout>
