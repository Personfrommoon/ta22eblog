@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-100 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold mb-4">Forgot Password</h2>
            <div class="mb-6 text-sm text-base-content/80">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <x-auth-session-status class="mb-6" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-control w-full mb-6">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input name="email" type="email" placeholder="Enter your email" value="{{ old('email') }}"
                        class="input input-bordered w-full @error('email') input-error @enderror" required
                        autocomplete="username" />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary w-full">
                        Email Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
