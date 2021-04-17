@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <img src='{{ asset("images/$student->url_foto") }}' class='img-thumbnail' alt='User Image'>
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td class="table-info" width="200px">Nama Lengkap</td>
                                    <td>{{ $student->nama }}</td>
                                </tr>
                                <tr>
                                    <td class="table-info">NIS</td>
                                    <td>{{ $student->nis }}</td>
                                </tr>
                                <tr>
                                    <td class="table-info">TTL</td>
                                    <td>{{ $student->tempat_lahir }}, {{ $student->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td class="table-info">NEM</td>
                                    <td>{{ $student->nem }}</td>
                                </tr>
                                <tr>
                                    <td class="table-info">No. Ijazah</td>
                                    <td>{{ $student->no_ijazah }}</td>
                                </tr>
                                <tr>
                                    <td class="table-info">Nama Orang Tua</td>
                                    <td>{{ $student->nama_ortu }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
