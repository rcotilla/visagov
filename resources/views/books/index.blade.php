@extends('layouts.base')

@section('content')

@include('books.create')
@include('books.edit')
@include('books.delete')

<div class="container-fluid">
    <h1>{{ __('messages.books.books') }}</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBookModal">
        {{ __('messages.books.create') }}
    </button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('messages.books.title') }}</th>
                <th scope="col">{{ __('messages.books.author') }}</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="showEditBookModal({{ $book->id }});">{{ __('messages.books.edit') }}</button>
                    <button type="button" class="btn btn-danger" onclick="showDeleteBookModal({{ $book->id }});">{{ __('messages.books.delete') }}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $books->links() }}
    </div>
</div>

<script>
    // global app configuration object
    var config = {
        routes: {
            getBook: "{{ URL::to('get-book') }}",
        }
    };
</script>

@endsection

