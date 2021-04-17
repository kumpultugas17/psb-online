@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Form Pedaftaran PSB') }}</div>

                    <div class="card-body">

                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        @endif

                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="nama"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text"
                                        class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama"
                                        value="{{ old('nama') }}" required autofocus>

                                    @if ($errors->has('nama'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                        value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-5">
                                    <input id="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-5">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nis" class="col-md-4 col-form-label text-md-right">{{ __('NIS') }}</label>

                                <div class="col-md-4">
                                    <input id="nis" type="text"
                                        class="form-control{{ $errors->has('nis') ? ' is-invalid' : '' }}" name="nis"
                                        value="{{ old('nis') }}" required autofocus>

                                    @if ($errors->has('nis'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nis') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tempat_lahir"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>

                                <div class="col-md-5">
                                    <input id="tempat_lahir" type="text"
                                        class="form-control{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}"
                                        name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autofocus>

                                    @if ($errors->has('tempat_lahir'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_lahir"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                                <div class="col-md-4">
                                    <input id="tanggal_lahir" type="text"
                                        class="form-control{{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}"
                                        name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autofocus>
                                    <small id="passwordHelpBlock" class="form-text text-danger">
                                        Format: YYYY-MM-DD, contoh 1990-11-29.
                                    </small>

                                    @if ($errors->has('tanggal_lahir'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nem" class="col-md-4 col-form-label text-md-right">{{ __('NEM') }}</label>

                                <div class="col-md-4">
                                    <input id="nem" type="text"
                                        class="form-control{{ $errors->has('nem') ? ' is-invalid' : '' }}" name="nem"
                                        value="{{ old('nem') }}" required autofocus>

                                    @if ($errors->has('nem'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nem') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_ijazah"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nomor Ijazah') }}</label>

                                <div class="col-md-4">
                                    <input id="no_ijazah" type="text"
                                        class="form-control{{ $errors->has('no_ijazah') ? ' is-invalid' : '' }}"
                                        name="no_ijazah" value="{{ old('no_ijazah') }}" required autofocus>

                                    @if ($errors->has('no_ijazah'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('no_ijazah') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_sekolah"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Jenis Asal Sekolah') }}</label>
                                <div class="col-md-7">
                                    <div class="custom-control custom-radio custom-control-inline mt-2">
                                        <input type="radio" id="customRadioInline1" name="jenis_sekolah"
                                            class="custom-control-input" value="SMP">
                                        <label class="custom-control-label" for="customRadioInline1">SMP</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="jenis_sekolah"
                                            class="custom-control-input" value="MTs">
                                        <label class="custom-control-label" for="customRadioInline2">MTs</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="url_foto"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Upload Foto') }}</label>
                                <div class="col-md-7">
                                    <input id="url_foto" type="file"
                                        class="form-control{{ $errors->has('url_foto') ? ' is-invalid' : '' }}"
                                        name="url_foto" value="{{ old('url_foto') }}" required autofocus>

                                    @if ($errors->has('url_foto'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('url_foto') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="nama_ortu"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nama Orang Tua') }}</label>

                                <div class="col-md-6">
                                    <input id="nama_ortu" type="text"
                                        class="form-control{{ $errors->has('nama_ortu') ? ' is-invalid' : '' }}"
                                        name="nama_ortu" value="{{ old('nama_ortu') }}" required autofocus>

                                    @if ($errors->has('nama_ortu'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama_ortu') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pekerjaan_ortu"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan Orang Tua') }}</label>

                                <div class="col-md-6">
                                    <input id="pekerjaan_ortu" type="text"
                                        class="form-control{{ $errors->has('pekerjaan_ortu') ? ' is-invalid' : '' }}"
                                        name="pekerjaan_ortu" value="{{ old('pekerjaan_ortu') }}" required autofocus>

                                    @if ($errors->has('pekerjaan_ortu'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('pekerjaan_ortu') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telp"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Telp/Handphone') }}</label>

                                <div class="col-md-4">
                                    <input id="telp" type="text"
                                        class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" name="telp"
                                        value="{{ old('telp') }}" required autofocus>

                                    @if ($errors->has('telp'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Alamat Lengkap') }}</label>
                                <div class="col-md-6">
                                    <textarea id="alamat" type="text"
                                        class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}"
                                        name="alamat" value="{{ old('alamat') }}" rows="3"></textarea>

                                    @if ($errors->has('alamat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Daftar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
