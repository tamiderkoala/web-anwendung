@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('E-Mail Adresse bestätigen) }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ein neuer Bestätigungslink wurde dir per Mail gesendet.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('Du hast keine Mail bekommen?') }}, <a href="{{ route('verification.resend') }}">{{ __('Klicke hier um eine neue Mail zu erhalten.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
