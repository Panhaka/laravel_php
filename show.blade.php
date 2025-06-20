@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Meeting Detail</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $meeting->Meeting_name }}</h5>
            <p><strong>Organizer:</strong> {{ $meeting->organizer->name ?? 'N/A' }}</p>
            <p><strong>Staff:</strong> {{ $meeting->staff->name ?? 'N/A' }}</p>
            <a href="{{ route('meetings.edit', $meeting->Meeting_id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('meetings.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
