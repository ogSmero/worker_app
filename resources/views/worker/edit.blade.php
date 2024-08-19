@extends('layout.main')
@section('content')

    <h2>Edit page</h2>
    <hr>
    <form style="display: flex; flex-direction: column; width: fit-content; gap: 10px"
          action="{{ route('worker.update', $worker->id) }}"
          method="post">
        @csrf
        @method('Patch')
        <input type="text" name="name" placeholder="name" value="{{ old('name') ?? $worker->name }}">
        <input type="text" name="surname" placeholder="surname" value="{{ old('surname') ?? $worker->surname }}">
        <input type="email" name="email" placeholder="email" value="{{ old('email') ?? $worker->email }}">
        <input type="number" name="age" placeholder="age" value="{{ old('age') ?? $worker->age }}">
        <textarea name="description" placeholder="description">
            {{ old('description') ?? $worker->description }}
        </textarea>
        <div>
            <label for="married">is married</label>
            <input type="checkbox" name="is_married" id="married" {{ $worker->is_married ? ' checked': '' }}>
        </div>
        <input type="submit" value="Зберегти">
    </form>
@endsection
