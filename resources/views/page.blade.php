@extends('layouts.app')

@section('title', 'Localization')

@push('css')

@endpush

@section('content')
    <h1>
        {{ __('message.welcome') }}
    </h1>
@endsection



@push('js')

@endpush