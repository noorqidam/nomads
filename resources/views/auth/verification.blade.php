@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-right col-12" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="150">
                <div class="card">
                    <div class="card-header">Verification OTP</div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{url('frontend/images/logo_nomads.png')}}" alt="" class="w-50 mb-4">
                        </div>
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group">
                                <label for="otp" class="col-form-label text-md-right">OTP</label>
                                    <input id="otp" type="otp" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-login btn-block mb-3">
                                Kirim
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
