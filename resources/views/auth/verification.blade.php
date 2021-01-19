@extends('layouts.blank')
@section('title', 'Verifikasi OTP')
@section('content')
    <div class="container">
        <div class="row page-login">
            <div class="section-right col-md-6 offset-md-3">
                <div class="text-center">
                    <img src="{{url('frontend/images/logo_nomads.png')}}" alt="" class="w-30 mb-4">
                </div>
                @if (Session::has('flash_message_error'))
                    <div class="alert alert-error alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <center><strong style="color: red">{!! session('flash_message_error') !!}</strong></center>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center">Verification OTP</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('verification-post')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="otp" class="col-md-3 col-form-label text-md-right">OTP</label>
                                    <div class="col-md-6">
                                        <input id="otp" type="otp" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-login btn-block mb-3">
                                Kirim
                            </button>
                            <a href="" data-toggle="modal" data-target="#exampleModal" style="font-family: 'Assistent', sans-serif; color: #071C4D; text-decoration: none">Resend OTP</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal resend OTP --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Resend OTP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="POST" action="{{route('verification-resend')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-login btn-block mb-3" style="background-color: #FF9E53; color: #FFF">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
