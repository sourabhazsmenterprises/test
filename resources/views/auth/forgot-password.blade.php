@extends('frontend.master')
@section('main_content')
<style>
	svg{
		display:none !important;
	}
	.sm\:max-w-md {
  max-width:50% !important;
		height:230px;
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
        <x-slot name="logo" >
            <x-jet-authentication-card-logo />
        </x-slot>

        

        
		 @if(session('mymsg231') != null)
						<div class="alert alert-success   alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	 {{session('mymsg231')}}
</div>
					@endif

       
        <form method="GET" action="{{ url('forget-send-email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4 mb-5">
                <x-jet-button class="btn mb-3">
                  Next
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection