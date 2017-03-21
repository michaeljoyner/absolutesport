@extends('base')
@section('title')
<title>Contact Us| Absolute Sport</title>
@stop
@section('meta')
<meta name="description" content="If you are looking to contact us about our range of quality sports equipment, to get a quote, or if you have any custom manufacturing needs, you may send us a message here, or find the contact details you are looking for."/>
@stop
@section('menu')
@include('partials.slidemenu')
@stop

@section('content')
@include('partials.pageheader')
<section class="contact-main">
	<h1>Contact Us</h1>
	<p>Complete the form and we'll get back to you!</p>
	<p>Or feel free to contact us by phone or email</p>

	<form action="/contact" method="POST" class="contact-form">
		{!! csrf_field() !!}
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		    <label for="name">Name: </label>
		    @if($errors->has('name'))
		    <span class="error-message">{{ $errors->first('name') }}</span>
		    @endif
		    <input placeholder="Your name" type="text" name="name" value="{{ old('name') }}" class="form-control">
		</div>
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		    <label for="email">Email: </label>
		    @if($errors->has('email'))
		    <span class="error-message">{{ $errors->first('email') }}</span>
		    @endif
		    <input type="email" placeholder="Your email address" name="email" value="{{ old('email') }}" class="form-control">
		</div>
		<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
		    <label for="phone">Phone number: </label>
		    @if($errors->has('phone'))
		    <span class="error-message">{{ $errors->first('phone') }}</span>
		    @endif
		    <input placeholder="Leave your number if you would like us to call" type="text" name="phone" value="{{ old('phone') }}" class="form-control">
		</div>
		<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
		    <label for="message">Message: </label>
		    @if($errors->has('message'))
		    <span class="error-message">{{ $errors->first('message') }}</span>
		    @endif
		    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
		</div>
		<div class="form-group">
		    <button type="submit" class="btn" id="form-submit">Send</button>
		</div>
	</form>
	<div class="contact-details">
		<p class="phone-detail">
			<img src="{{ asset('images/phone_icon.png') }}" alt="phone number"><span>+27 83 257 9611</span>
		</p>
		<p class="mail-detail">
			<img src="{{ asset('images/email_icon.png') }}" alt="email address"><span>&#x72;&#x79;&#x61;&#x6E;&#x40;&#x61;&#x62;&#x73;&#x6F;&#x6C;&#x75;&#x74;&#x65;&#x73;&#x70;&#x6F;&#x72;&#x74;&#x2E;&#x63;&#x6F;&#x2E;&#x7A;&#x61;</span>
		</p>
	</div>
</section>
@include('partials.footer')

@stop
