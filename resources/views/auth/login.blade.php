@extends('partials.layout')
@section('title', __('Log in'))
@section('content')
    <div class="card bg-base-300 w-2/3 mx-auto">
        <div class="card-body">
            <h2 class="card-title">{{__('Log in')}}</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <label class="form-control w-full">
                  <div class="label">
                      <span class="label-text">{{__('Email')}}</span>
                  </div>
                  <input name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                      class="input input-bordered w-full @error('email') input-error @enderror" required autofocus autocomplete="username"/>
                  <div class="label">
                      @error('email')
                          <span class="label-text-alt text-error">{{ $message }}</span>
                      @enderror
                  </div>
               </label>

               <label class="form-control w-full">
                  <div class="label">
                     <span class="label-text">{{__('Password')}}</span>
                  </div>
                  <input name="password" type="password" placeholder="Password"
                     class="input input-bordered w-full @error('password') input-error @enderror" required autocomplete="current-password" />
                  <div class="label">
                     @error('password')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                     @enderror
                  </div>
               </label>

               <div class="form-control w-fit">
                <label class="label cursor-pointer gap-2">
                  <span class="label-text">{{__('Remember me')}}</span>
                  <input name="remember" type="checkbox" class="checkbox checkbox-secondary" />
                </label>
              </div>

               <div class="text-right">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{route('password.request')}}">{{__('Forgot your password?')}}</a>
                    @endif
                    <input type="submit" class="btn btn-primary" value="{{__('Log in')}}">
               </div>
            </form>
        </div>
    </div>
@endsection
