@extends('partials.layout')
@section('title', 'Confirm Password')
@section('content')
<div class="container mx-auto bg-base-300 card w-1/2 shadow-xl">
    <div class="card-body">

        <div class="mb-4 text-sm text-gray-400">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Password</span>

                </div>
                <input name="password" type="password" placeholder="Password"
                    class="input input-bordered @error('password') input-error @enderror w-full" required
                    autocomplete="new-password" />
                <div class="label">
                    @error('password')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>

            <div class="flex justify-end mt-4">
                <button class="btn btn-primary">Confirm</button>
            </div>
        </form>
    </div>

</div>
@endsection
