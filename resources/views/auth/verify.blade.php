@extends('layouts.app')

@section('content')
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kinnita Oma E-Maili Aadress') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Kinnituse link on saadetud teie emaili aadressile') }}
                        </div>
                    @endif

                    {{ __('Enne, edasi minemist palun kontrollige oma E-Maili aadressi') }}
                    {{ __('Kui te E-Maili ei saanud') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Vajutage siia, et saata veel üks') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
