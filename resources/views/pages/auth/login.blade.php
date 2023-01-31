@extends('layouts.auth')

@section('title', 'Sipdes App')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
<div class="card card-primary">
    <div class="card-header">
        <h4>Login</h4>
    </div>

    <div class="card-body">
        {{-- Error Alert --}}
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form method="POST" action="{{ route('proses_login') }}" class="needs-validation" novalidate="" id="logForm">
            @csrf
            <div class="form-group">
                @error('login_gagal')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <label for="username">Username</label>
                <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                    Please fill in your username
                </div>
                @if($errors->has('username'))
                <span class="error">{{ $errors->first('username') }}</span>
                @endif
            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                    please fill in your password
                </div>
                @if($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
<div class="text-muted mt-5 text-center">
    Don't have an account? <a href="{{ url('/register') }}">Create One</a>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush