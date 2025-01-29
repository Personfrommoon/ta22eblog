<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, please verify your email by clicking the link we just sent you. If you didn\'t receive the email, we can send another one.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success text-sm">
            {{ __('A new verification link has been sent to your registered email address.') }}
        </div>
    @endif

    <div class="mt-4 flex flex-col sm:flex-row items-center justify-between gap-3">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button class="btn btn-primary">
                {{ __('Resend Verification Email') }}
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
