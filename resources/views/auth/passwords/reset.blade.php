@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border-2 shadow-md mt-20">
                <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                    {{ __('Reset Password') }}
                </div>

                <form method="POST" action="{{ route('password.update') }}" class="py-10 px-5" novalidate>
                    @csrf
            
                    <input type="hidden" name="token" value="{{ $token }}">
            
                    <div class="flex flex-wrap mb-6">
                        <label for="email" class="block text-gray-700 text-sm mb-2">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Tu Email" autocomplete="email" autofocus>
                        @error('email')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
                    <div class="flex flex-wrap mb-6">
                        <label for="password" class="block text-gray-700 text-sm mb-2">{{ __('Password') }}</label>
            
                        <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full @error('password') border-red-500 @enderror" name="password" placeholder="Password" autocomplete="new-password">
        
                        @error('password')
                            <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            
                    <div class="flex flex-wrap mb-6">
                        <label for="password-confirm" class="block text-gray-700 text-sm mb-2">{{ __('Confirm Password') }}</label>
            
                        <input id="password-confirm" type="password" class="p-3 bg-gray-200 rounded form-input w-full @error('password-confirm') border-red-500 @enderror" name="password_confirmation" placeholder="Confirmation Password" autocomplete="new-password">
                    </div>
            
                    <div class="flex flex-wrap">
                        <button type="submit" class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase rounded font-bold">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
