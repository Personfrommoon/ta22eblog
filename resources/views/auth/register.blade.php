@extends('partials.layout')
@section('title', 'Register')
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="card bg-base-100 shadow-xl max-w-md mx-auto">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold mb-4">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input name="name" type="text" placeholder="Name" value="{{ old('name') }}"
                        class="input input-bordered w-full @error('name') input-error @enderror" required autofocus
                        autocomplete="name" />
                    @error('name')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control w-full mb-4">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                        class="input input-bordered w-full @error('email') input-error @enderror" required
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
                        autocomplete="new-password" />
                    @error('password')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control w-full mb-6">
                    <label class="label">
                        <span class="label-text">Confirm Password</span>
                    </label>
                    <input name="password_confirmation" type="password" placeholder="Confirm Password"
                        class="input input-bordered w-full @error('password_confirmation') input-error @enderror"
                        required autocomplete="new-password" />
                    @error('password_confirmation')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a href="{{ route('login') }}" class="btn btn-ghost">
                        Already Registered?
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
