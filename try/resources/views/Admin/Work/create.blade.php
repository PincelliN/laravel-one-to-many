@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.work.store') }}" method="post">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name='title' placeholder="Laravel"
                value="{{ old('title') }}">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Argomento</label>
            <input type="text" class="form-control" id="subject" name='subject' placeholder="php"
                value="{{ old('subject') }}">
            @error('subject')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="d-flex gap-3">
            <div class="mb-3">
                <label for="start_date" class="form-label">Data di Inizio</label>
                <input type="date" class="form-control" id="start_date" name='start_date'
                    value="{{ old('start_date') }}">
                @error('start_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">Data fine progetto</label>
                <input type="date" class="form-control" id="end_date" name='end_date' value="{{ old('end_date') }}">
                @error('end_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="d-flex gap-3">
            <div class="mb-3">
                <label for="post" class="form-label">Post</label>
                <input type="numbers" class="form-control" id="post" name='post' value="{{ old('post') }}">
                @error('post')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="collaborators" class="form-label">Collaboratori</label>
                <input type="numbers" class="form-control" id="collaborators" name='collaborators'
                    value="{{ old('collaborators') }}">
                @error('collaborators')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Example textarea</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button class="btn btn-success" type="submit">Invia</button>
        <button class="btn btn-danger" type="reset">Reset</button>

    </form>
@endsection
