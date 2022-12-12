@extends('layouts.main')

@section('title', 'Events')

@section('content')
    @if($id != null)
        <h1>Welcome Products {{ $id }}</h1>
        @else
        <h1>Welcome Products Sem Param </h1>
    @endif

@endsection

