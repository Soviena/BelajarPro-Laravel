@extends('layout.layout-admin')
@section('content')

<section class="mt-3 pt-2" id="course_diikuti">
        <div class="container mt-3 pt-2">
            <div class="card mb-3">
                <div class="card-body ">
                    <h1 class="text-info fw-bold" style="text-align: center; ">
                        List Course yang Anda Ikuti
                    </h1>
                </div>
            </div>
        </div>
            
        <div class="container table-bel">
    <table class="table table-light table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">ID Course</th>
                <th scope="col">Nama Course</th>
                <th scope="col" style="text-align: center;">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
</div>

   

    

        </section>
        
@endsection