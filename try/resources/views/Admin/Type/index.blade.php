@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($types as $type)
            <li>{{ $type->name }}</li>
        @endforeach
    </ul>
@endsection
