@extends('layouts.apps')


<div>
<x-guest-layout>
@section('content')
<div class="card">
  <div class="card-body">
    <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-2 h-20fill-current text-gray-20" />
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="row">
         <div class="col-md-3 offset-2 bg-secondary">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
            <div class="form-group">
            <div class="mt-0">
                    <x-label for="email" :value="__('Email')"  />

            </div>

                    <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />

            </div>

            <div class="form-group">

                <!-- Password -->
                <div class="mt-0">
                    <x-label for="password" :value="__('Password')" />
                </div>
                 <x-input id="password" class="block mt-1 w-full form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
             </div>


                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ml-3 btn btn-success"  >
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
         </div>

            <div class="col-md-5 offset-1" >
                <h1>Book Appointment </h1>
                <p> Kindly login to book an appointment with us. </p>

            </div>
        </div>


  </div>
        </div>
    </x-auth-card>
   </div>
</div>


    @endsection
</x-guest-layout>
</div>
