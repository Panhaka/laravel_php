@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Meeting</h2>

    <form action="{{ route('meetings.update', $meeting->Meeting_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Meeting Name</label>
            <input type="text" name="Meeting_name" value="{{ $meeting->Meeting_name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Organizer</label>
            <select name="organizer_id" class="form-select" required>
                @foreach($organizers as $organizer)
                    <option value="{{ $organizer->Organizer_id }}" {{ $organizer->Organizer_id == $meeting->organizer_id ? 'selected' : '' }}>
                        {{ $organizer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Staff</label>
            <select name="staff_id" class="form-select" required>
                @foreach($staff as $s)
                    <option value="{{ $s->Staff_id }}" {{ $s->Staff_id == $meeting->staff_id ? 'selected' : '' }}>
                        {{ $s->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('meetings.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
