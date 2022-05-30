@extends('layouts.admin')

@section('content-header')

    <style>
    .form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
    </style>



    <div class="container rounded bg-white mt-2mb-5">
        <div class="row">
            <div class="col-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ Auth::user()->nama }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
            </div>
                <div class="col-md-5">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile </h4>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Nama</label>
                                <input type="text" class="form-control" placeholder="first name" value="{{ Auth::user()->nama }}"></div>
                            <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" value="{{ Auth::user()->username }}"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Nomor Hp</label><input type="text" class="form-control" value="0{{ Auth::user()->no_hp }}"></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" value="{{ Auth::user()->email }}"></div>

                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text" class="form-control" value="{{ Auth::user()->tempat_lahir }}"></div>

                            <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input type="text" class="form-control" value="{{ Auth::user()->tanggal_lahir }}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Kompetensi Keahlian</label><input type="text" class="form-control" value="{{ Auth::user()->jurusans->jurusan }}"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>



@endsection
