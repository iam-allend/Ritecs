@extends('layouts.profile')

@section('content')
<div class="d-flex justify-content-between w-100 mb-2">
    <span class="text-dark mb-4 d-none d-md-flex">
        <img src="{{ asset('assets/img/team-1.jpg') }}" class="bg-dark rounded object-fit-cover img-profile-profile me-3" alt="">
        <div class="nama-profile">
            <h5 class="mb-0 fw-bold">Hallo, Anur Mustakim </h5>
            <span class="normal-text text-member bg-primary small">Membership</span>
        </div>
    </span>
    <span class="d-none d-md-flex flex-nowrap text-nowrap small">
        <a href="" class="normal-text">Profile/</a>
        <a href="#" class="text-dark">Memberhsip</a>
    </span>
</div>
<div class="memberhsip mb-5">    
    
</div>

@endsection
