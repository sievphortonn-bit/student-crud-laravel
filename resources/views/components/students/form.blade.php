@csrf
        <label for="fname">First Name</label>
        <input type="text" name="first_name" id="fname" class="form-control" value="{{ old('first_name') }}">
        <label for="lname">Last Name</label>
        <input type="text" name="last_name" id="lname" class="form-control" value="{{ old('last_name') }}">
        <label for="form-select">Gender</label>
        <select name="gender" class="form-select">
            <option value="">-- Select Gender --</option>

            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
        </select>

        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control">{{ old('address') }}</textarea>
        {{-- <label for="photo" class="form-label">Photo</label> --}}
        <div class="mb-3">
            <label for="photo" class="form-label">Student Photo</label>

            <input type="file" name="photo" id="photo"class="form-control" accept="image/*" onchange="previewImage(event)">
        </div>

        <div class="mt-3">
            <label class="form-label fw-bold">Preview Photo:</label><br>

            <img id="preview"
                src="https://a0.anyrgb.com/pngimg/78/1396/info-user-profile-account-hearing-login-avatar-user-interface-icon-design-conversation-user.png"
                class="rounded border"
                style="width: 150px; height: 150px; object-fit: cover;">
        </div>
        <button class="btn btn-primary mt-3">Save</button>