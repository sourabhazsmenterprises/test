@extends('frontend.master')
@section('main_content')
<style>
	svg{
		display:none !important;
	}
	.sm\:max-w-md {
  max-width:50% !important;
		height:auto;
}
	.text-gray-700{
		margin-top:30px;
	font-size:22px !important;
		margin-bottom:30px;
	}
	.bg-gray-800{
		font-size:15px !important;
		padding:10px !important;
	}
	.bg-white{
padding-bottom:40px !important;
	}
</style>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
@if(session('mymsg231') != null)
						<div class="alert alert-success   alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 {{session('mymsg231')}}
</div>
					@endif
          <form method="POST" action="{{ url('password-submit') }}">
            @csrf
  
           <input type="hidden" name="email" value="{{$email}}" >
            <div class="block">
				<label for="email" >Email</label>
				
                <input id="email" class="block mt-1 w-full form-control" type="email" value="{{$email}}" readonly name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <label for="password" >Password</label>
                <input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
				<label for="password_confirmation" >Confirm Password</label>
                
                <input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection