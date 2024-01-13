<div class="row">
    <div class="col-md-3 mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" value="{{ old('name', $employee->name) }}" id="name" class="form-control"
               placeholder="Name">
        @error('name')
        <p class="text-danger mb-0">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="col-md-3 mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" value="{{ old('email', $employee->email) }}" id="email"
               class="form-control" placeholder="Email">
        @error('email')
        <p class="text-danger mb-0">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="col-md-3 mb-3">
        <label for="designation" class="form-label">Designation</label>
        <select name="designation" id="designation" class="form-select">
            <option selected value="">Select</option>
            @foreach(getDesignationList() as $designation)
                <option @if(old('designation', $employee->designation) === $designation) selected
                        @endif value="{{ $designation }}">
                    {{ $designation }}
                </option>
            @endforeach
        </select>
        @error('designation')
        <p class="text-danger mb-0">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="col-md-3 mb-3">
        <label for="status" class="form-label">Status</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="status" value="{{ \App\Models\Employee::STATUS_ACTIVE }}"
                   @if(old('status', $employee->status) == '1') checked @endif id="status">
            <label class="form-check-label" for="isActive">Is Active</label>
        </div>
        @error('status')
        <p class="text-danger mb-0">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="col-12 mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea name="address" id="address" class="form-control" rows="5"
                  placeholder="Address">{{ old('address', $employee->address) }}</textarea>
        @error('address')
        <p class="text-danger mb-0">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" value="{{ old('phone', $employee->phone) }}" id="phone" class="form-control"
               placeholder="Phone">
        @error('phone')
        <p class="text-danger mb-0">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        @error('image')
        <p class="text-danger mb-0">
            {{ $message }}
        </p>
        @enderror
    </div>
    @if($employee->image)
        <div class="col-md-12 text-center">
            <a href="{{ asset('storage/'.$employee->image) }}" target="_blank">
                <img src="{{ asset('storage/'.$employee->image) }}" width="300" class="img-thumbnail"
                     alt="{{ $employee->name }}">
            </a>
        </div>
    @endif
</div>
