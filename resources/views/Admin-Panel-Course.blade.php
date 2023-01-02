@extends('layout.layout')
@section('content')

        <section id="course_mngmnt">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID Course</th>
                        <th scope="col">Nama Course</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course as $c)

                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->deskripsi }}</td>
                        <td>{{ $c->img }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{$c->id}}">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data tersebut ?')) {window.location.href = '{{ route('delete-course', $c->id)}}';}">Delete</button>
                        </td>
                    </tr>
                    <div class="modal fade" id="edit-{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('edit-course')}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-2">
                                            <label for="name" class="form-label fw-bold">Nama Course</label>
                                            <input type="text" class="form-control" name="name" value="{{ $c->name }}">
                                        </div>
                                        <div class="mb-2">
                                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsi" value="">
                                        </div>
                                        <div class="mb-2">
                                            <label for="img" class="form-label fw-bold">Link Image</label>
                                            <input type="text" class="form-control" name="img" value="">
                                        </div>
                                        <input type="hidden" value="{{ $c->id }}" name="id">
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-warning" value="UbahData">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-{{$c->id}}">Add Course</button>
                <div class="modal fade" id="add-{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('add-course')}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-2">
                                            <label for="name" class="form-label fw-bold">Nama Course</label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>
                                        <div class="mb-2">
                                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsi" value="">
                                        </div>
                                        <div class="mb-2">
                                            <label for="img" class="form-label fw-bold">Link Image</label>
                                            <input type="text" class="form-control" name="img" value="">
                                        </div>
                                        <input type="hidden" value="{{ $c->id }}" name="id">
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-warning" value="Simpan">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        
@endsection