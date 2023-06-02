@extends('layout.layout')
@section('content')

<section class="mt-3 pt-2" id="course_diikuti">
        <div class="container mt-3 pt-2">
            <div class="card mb-3">
                <div class="card-body ">
                    <h1 class="text-info fw-bold" style="text-align: center; ">
                        Kursus Yang Diikuti
                    </h1>
                </div>
            </div>
        </div>
            
        <div class="container table-bel">
            <table class="table table-light table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col">Nama Kursus</th>
                        <th scope="col" style="text-align: center;">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($mycourse))
                        @foreach($mycourses as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->name }}</td>
                            <td>{{ $c->deskripsi }}</td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#edit-{{$c->id}}">Lihat</button>
                                    <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#edit-{{$c->id}}">Hapus</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                    <th scope="col" colspan="4" style="text-align: center;">Data Tidak ada</th>
                    @endif
                </tbody>
            </table>
        </div>
        </section>
@endsection