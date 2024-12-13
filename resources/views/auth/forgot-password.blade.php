{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('partials.layout')
@section('title', __('Log in'))
@section('content')
    <div class="w-1/3 mx-auto card bg-base-300">
        <div class="card-body">
            <div class="text-s">
                <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
            </div>
                <form action="{{ route('password.email') }}" method="POST">
                    <!-- Session Status - annab teada, et email on saadetud -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                    @csrf

                    <label class="w-full form-control">
                        <div class="label">
                            <span class="label-text">{{__('Email')}}</span>
                        </div>
                        <input name="email" type="email" placeholder="Email" {{-- value="{{ old('email') }}" --}} class="w-full input input-bordered @error('email')  input-error @enderror" required autofocus/>
                        <div class="label">
                            @error('email')
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </label>

                    <div class="form-control w-fit"></div>

                    <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="Email Password Reset Link">
                    </div>
                </form>
            </div>
    </div>
@endsection
