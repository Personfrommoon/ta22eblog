@extends('partials.layout')
@section('title', 'Profile')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 p-2">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Profile') }}
            </h2>
        </div>

        <div class="container space-y-2 mt-3">
            <div class="card bg-base-300 p-2 shadow-xl">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="card bg-base-300 p-2 shadow-xl">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="card bg-base-300 p-2 shadow-xl">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
