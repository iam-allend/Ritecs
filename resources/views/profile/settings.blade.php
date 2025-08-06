@extends('layouts.profile')

@section('content')
<div class="d-flex justify-content-between w-100 flex-wrap-reverse">
    <span class="text-dark d-flex">
        <div class="img-profile d-grid justify-content-start">
            <img src="{{ asset('assets/img/team-1.jpg') }}" class="bg-dark rounded object-fit-cover img-profile-profile" alt="">
            <a href="" class="small mt-1 normal-text text-start m-auto">
                <i class="bi bi-pencil-square me-1"></i>Ubah
            </a>
        </div>
        <div class="nama-profile ms-3">
            <h5 class="mb-0 fw-bold">Anur Mustakim</h5>
            <span class="normal-text text-member bg-primary small">Membership</span>
        </div>
    </span>
    <span class="d-flex flex-nowrap text-nowrap small mb-4">
        <a href="" class="normal-text">Profile/</a>
        <a href="#" class="text-dark">Settings</a>
    </span>
</div>

<div class="settings my-4 p-3 p-md-4 pt-4 pt-md-4 bg-light rounded">
    <h5 class="fw-bold mb-1 mt-0">Ubah Data Diri</h5>
    <p class="normal-text mb-4">Data lengkap diperlukan untuk proses pengunggahan Jurnal atau Buku</p

    <div class="form-container p-0">
        <form>
            
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="firstname" placeholder="Anur Mustakim">
                        <label for="firstname">Nama Depan <sup class="text-danger">*</sup></label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lastname" placeholder="Anur Mustakim">
                        <label for="lastname">Nama Belakang <sup class="text-danger">*</sup></label>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="NIK" placeholder="332...">
                        <label for="NIK">NIK</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="birthday" placeholder="332...">
                        <label for="birthday">Tanggal Lahir</label>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="email" placeholder="ritecs@gmail.com@">
                        <label for="email">Email <sup class="text-danger">*</sup></label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="">
                        <label for="password">Password <sup class="text-danger">*</sup></label>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="address" placeholder="ritecs@gmail.com@">
                        <label for="address">Alamat</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="noTepl" placeholder="62 082 xxxx xxxx">
                        <label for="noTepl">Nomor Telpon</label>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control py-3 bg-white" id="inputGroupFile04" aria-label="Upload">
                <button class="btn btn-outline-secondary fw-normal" type="button">Unggah KTP</button>
            </div>

            <div class="footer-form mt-4">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col">
                        <div class="d-flex w-100 justify-content-between gap-2">
                            <a href="" class="btn btn-dark btn-login-me rounded-pill w-100 px-4">Ubah Data Diri</a>
                            <a href="" class="btn btn-outline-dark rounded-pill w-100 px-4">Reset</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection
