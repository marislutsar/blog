{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout> --}}

@extends('partials.layout')
@section('title', __('Verify Email'))
@section('content')
    <div class="w-2/3 mx-auto card my-10">
        <div class="card-body">
            <div class="w-2/3 mx-auto card bg-base-300">
                <div class="card-body items-start">
                    <div class="mb-2 text-left">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-800">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                  @endif
                  
                  <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                  <div class="card-actions">
                    <button class="btn btn-primary"><span>{{__('RESEND VERIFICATION EMAIL')}}</span></button>
                    <button class="btn btn-ghost">Deny</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection