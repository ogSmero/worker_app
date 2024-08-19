@extends('layout.main')
@section('content')

    <h2>Show page</h2>
    <div class="worker">
        <div>
            {{ $worker->name }}
            {{ $worker->surname }}
            {{ $worker->email }}
            {{ $worker->age }}
            {{ $worker->description }}
        </div>
        <a href="{{ route('worker.index') }}">Повернутись</a>
    </div>
@endsection
