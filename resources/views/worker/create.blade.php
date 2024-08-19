@extends('layout.main')
@section('content')

    <form style="display: flex; flex-direction: column; width: fit-content; gap: 10px"
          action="{{ route('worker.store') }}"
          method="post">
        @csrf
            <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
            @error('name')
            <div>
                {{ $message }}
            </div>
            @enderror

            <input type="text" name="surname" placeholder="surname" value="{{ old('surname') }}">
            @error('surname')
            <div>
                {{ $message }}
            </div>
            @enderror

            <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
            @error('email')
            <div>
                {{ $message }}
            </div>
            @enderror

            <input type="number" name="age" placeholder="age" value="{{ old('age') }}">
            @error('age')
            <div>
                {{ $message }}
            </div>
            @enderror

            <textarea name="description" placeholder="description">{{ old('description') }}</textarea>
            @error('description')
            <div>
                {{ $message }}
            </div>
            @enderror

            <div>
                <label for="married">is married</label>
                <input type="checkbox" name="is_married" id="married" {{ old('is_married') == 'on' ? ' checked' : '' }}>
            </div>
            <input type="submit" value="Додати">
    </form>
@endsection
