@extends('layouts.app')

@section('content')
    @livewire('create-post', ['user' => $user])
    @livewire('home-feed', ['user' => $user])
    @include('partials.edit-post-modal')
@endsection

