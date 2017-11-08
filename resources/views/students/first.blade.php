@extends('welcome')


@section('content')
    @foreach($students as $task)

        <a href="/students/{{ $task->id }}">
            <li>{{ $task->matricNo }}</li>
        </a>
    @endforeach
@endsection('content')
        