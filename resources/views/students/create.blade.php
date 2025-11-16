<x-layout>
    <h1>Insert New Student</h1>
    @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" name="first_name" id="fname" class="form-control">
        <label for="lname">Last Name</label>
        <input type="text" name="last_name" id="lname" class="form-control">
        <label for="form-select">Gender</label>
        <select name="gender" class="form-select">
            <option value="">-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control"></textarea>
        <label for="photo" class="form-label">Photo</label>
        <input type="file" name="photo" id="photo" class="form-control">
        <button class="btn btn-primary mt-3">Save</button>
    </form>
</x-layout>
