@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <h1>{{ __('messages.contact.contact') }}</h1>
        <form class="form-floating" name="contact" id="contact" method="post" action="{{ url('submit') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">{{ __('messages.contact.email') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1"
                    placeholder="example@mail.com" name="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">{{ __('messages.contact.message') }}</label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">{{ __('messages.contact.send') }}</button>
        </form>
    </div>
@endsection
