@extends('layouts.app')

@section('content')
    @livewire('home-feed', ['user' => $user])
@endsection

