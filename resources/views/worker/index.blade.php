@extends('layout.main')
@section('content')

    <div>
        <a href="{{ route('worker.create') }}">Додати робітника</a>
    </div>
    <hr>
    <div>
        <form action="{{ route('worker.index') }}">
            <input type="text" name="name" placeholder="name" value="{{ request()->get('name') }}">
            <input type="text" name="surname" placeholder="surname" value="{{ request()->get('surname') }}">
            <input type="text" name="email" placeholder="email" value="{{ request()->get('email') }}">
            <input type="number" name="from" placeholder="from" value="{{ request()->get('from') }}">
            <input type="number" name="to" placeholder="to" value="{{ request()->get('to') }}">
            <input type="text" name="description" placeholder="description" value="{{ request()->get('description') }}">
            <input id="isMarried" type="checkbox" name="is_married" {{ request()->get('is_married') == 'on' ? ' checked' : '' }}>
            <label for="isMarried">is Married</label>
            <input type="submit" value="Пошук">
            <a href="{{ route('worker.index') }}">Скинути фільтр</a>
        </form>
    </div>
    <div class="worker">
        @foreach($workers as $worker)
            <hr>
            <div>
                {{ $worker->name }}
                {{ $worker->surname }}
                {{ $worker->email }}
                {{ $worker->age }}
                {{ $worker->description }}
            </div>
            <a href="{{ route('worker.show', $worker->id) }}">Подивитись</a>
            <a href="{{ route('worker.edit', $worker->id) }}">Редагувати</a>
            <form action="{{ route('worker.delete', $worker->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Видалити">
            </form>
            <hr>
        @endforeach
        <div class="my-nav">
            {{ $workers->withQueryString()->links() }}
        </div>
    </div>
@endsection
