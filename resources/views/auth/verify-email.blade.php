@extends('partials.layout')
@section('title', 'Email Verification')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-100 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold mb-4">Email Verification</h2>

            <div class="mb-4 text-sm text-base-content">
                {{ __('Thanks for signing up! Before getting started, please verify your email by clicking the link we just sent you. If you didn\'t receive the email, we can send another one.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success mb-4 text-sm">
                    {{ __('A new verification link has been sent to your registered email address.') }}
                </div>
            @endif

            <div class="mt-4 flex flex-col sm:flex-row items-center justify-between gap-3">
                <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                    @csrf
                    <button type="submit" class="btn btn-primary w-full sm:w-auto">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto">
                    @csrf
                    <button type="submit" class="btn btn-outline w-full sm:w-auto">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
