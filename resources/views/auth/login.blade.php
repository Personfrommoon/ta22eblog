@extends('partials.layout')
@section('title', 'Login')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-100 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                        class="input input-bordered w-full @error('email') input-error @enderror" required autofocus
                        autocomplete="username" />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Password"
                        class="input input-bordered w-full @error('password') input-error @enderror" required
                        autocomplete="current-password" />
                    @error('password')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control w-fit mb-6">
                    <label class="label cursor-pointer gap-2">
                        <input type="checkbox" class="toggle" checked="checked" />
                        <span class="label-text">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a href="{{ route('password.request') }}" class="btn btn-ghost">
                        Forgot your password?
                    </a>

                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
