@extends('layouts.my-app')

@section('title', 'Medilab - Inner Page')

@section('content')

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Inner Page</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Inner Page</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <ul>
                @if ($users->isEmpty() || $users->count() <= 0)
                    <li>No users found</li>
                @else
                    @foreach ($users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    </section>

@endsection
