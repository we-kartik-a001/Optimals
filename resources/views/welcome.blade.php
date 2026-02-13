@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    @if (session('success'))
        <div id="flash-message" class="bg-green-500 text-white px-4 py-2 rounded mb-4 transition-opacity duration-500">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="flash-message" class="bg-red-500 text-white px-4 py-2 rounded mb-4 transition-opacity duration-500">
            {{ session('error') }}
        </div>
    @endif

    <h2>Welcome to Home Page</h2>
    <a class="border border-2" href="{{ route('employee.create') }}">Create employee</a>
    <a class="border border-2" href="{{ route('designation.create') }}">Create designation</a>

@endsection
