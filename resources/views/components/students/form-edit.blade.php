@csrf
        @method('PATCH')
        <label for="fname">First Name</label>
        <input type="text" name="first_name" id="fname" class="form-control"
            value="{{ old('first_name', $student->first_name ?? '') }}">
        <label for="lname">Last Name</label>
        <input type="text" name="last_name" id="lname" class="form-control"
            value="{{ old('last_name', $student->last_name ?? '') }}">
        <label for="form-select">Gender</label>
        <select name="gender" id="form-select" class="form-select">
            <option value="">-- Select Gender --</option>
            <option value="Male" {{ old('gender', $student->gender ?? '') == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ old('gender', $student->gender ?? '') == 'Female' ? 'selected' : '' }}>Female
            </option>
            <option value="Other" {{ old('gender', $student->gender ?? '') == 'Other' ? 'selected' : '' }}>Other
            </option>
        </select>
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control">{{ old('address', $student->address ?? '') }}</textarea>
        <label for="photo" class="form-label">Photo</label>
        <input type="file" name="photo" id="photo" class="form-control">
        @if (isset($student) && $student->photo)
            <p class="mt-2">
                <img src="{{ asset('storage/' . $student->photo) }}" alt="Student photo" width="120"
                    class="img-thumbnail">
            </p>
        @endif
        
        <button type="submit" class="btn btn-primary mt-3">
            {{ isset($student) ? 'Update' : 'Save' }}
        </button>