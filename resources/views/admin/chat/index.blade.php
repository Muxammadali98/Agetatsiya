@extends('layouts.admin')

@section('title')
    Create city
@endsection

@section('content')
    {{-- @include('sections.chat.chat') --}}
    @empty($messages)
        @php
            $messages = [];
        @endphp
    @endempty

    @livewire('message', ['chats'=>$chats])
@endsection