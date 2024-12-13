{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('partials.layout')
@section('title', __('Confirm password'))
@section('content')
    <div class="w-1/3 mx-auto card bg-base-300 mt-10">
        <div class="card-body">
            <div class="text-s">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

                <form action="{{ route('password.confirm') }}" method="POST">
                @csrf

                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">{{__('Password')}}</span>
                    </div>
                    <input name="password" type="password" placeholder="Password" {{-- value="{{ old('em') }}" --}} class="w-full input input-bordered @error('password') input-error @enderror" required/>
                    <div class="label">
                        @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </div>
                </label>
                <div class="form-control w-fit">
                  </div>
                <div class="text-start">
                    <input type="submit" class="btn btn-primary" value="{{ __('Confirm') }}">
                </div>
            </form>
        </div>
    </div>
@endsection