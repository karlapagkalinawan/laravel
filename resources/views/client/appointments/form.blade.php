{{-- Student --}}
<div class="mb-3">
    <label for="student_id" class="form-label">Student</label>
    <select name="student_id" id="student_id" class="form-select @error('student_id') is-invalid @enderror" required>
        <option value="">-- Select Student --</option>
        @foreach ($students as $student)
            <option value="{{ $student->id }}"
                {{ old('student_id', $appointment->student_id ?? '') == $student->id ? 'selected' : '' }}>
                {{ $student->fname }} {{ $student->lname }}
            </option>
        @endforeach
    </select>
    @error('student_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Title --}}
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
           value="{{ old('title', $appointment->title ?? '') }}" required>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Appointment Date --}}
<div class="mb-3">
    <label for="appointment_date" class="form-label">Date</label>
    <input type="date" name="appointment_date" id="appointment_date"
           class="form-control @error('appointment_date') is-invalid @enderror"
           value="{{ old('appointment_date', $appointment->appointment_date ?? '') }}" required>
    @error('appointment_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Appointment Time --}}
<div class="mb-3">
    <label for="appointment_time" class="form-label">Time</label>
    <input type="time" name="appointment_time" id="appointment_time"
           class="form-control @error('appointment_time') is-invalid @enderror"
           value="{{ old('appointment_time', $appointment->appointment_time ?? '') }}" required>
    @error('appointment_time')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Status --}}
<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
        <option value="Pending" {{ old('status', $appointment->status ?? '') == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="Completed" {{ old('status', $appointment->status ?? '') == 'Completed' ? 'selected' : '' }}>Completed</option>
    </select>
    @error('status')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Remarks --}}
<div class="mb-3">
    <label for="remarks" class="form-label">Remarks</label>
    <textarea name="remarks" id="remarks"
              class="form-control @error('remarks') is-invalid @enderror"
              rows="3">{{ old('remarks', $appointment->remarks ?? '') }}</textarea>
    @error('remarks')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
