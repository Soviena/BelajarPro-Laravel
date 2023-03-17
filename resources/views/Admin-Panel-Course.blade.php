@extends('layout.layout-admin')
@section('content')

        <section id="course_mngmnt">
            <div class="container table-bel">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th scope="col">ID Course</th>
                        <th scope="col">Nama Course</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course as $c)

                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->deskripsi }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{$c->id}}">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data tersebut ?')) {window.location.href = '{{ route('delete-course', $c->id)}}';}">Delete</button>
                            <a href="{{route('admin-article',$c->id)}}" class="btn btn-info">Article</a>
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
                                <form action="{{ route('edit-course')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-2">
                                            <label for="name" class="form-label fw-bold">Nama Course</label>
                                            <input type="text" class="form-control" name="name" value="{{ $c->name }}">
                                        </div>
                                        <div class="mb-2">
                                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsi" value="{{ $c->deskripsi }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="img" class="form-label fw-bold">Image</label>
                                            <img class="rounded-3 mb-2 mx-auto shadow img-thumbnail" src="{{asset('storage/uploaded/Course/'.$c->img)}}" alt="@isset($c) <?=$c->judul?> @endisset" style="max-height:240px;width:100%;max-width:100%; object-fit: cover; object-position: 25% 25%;">
                                            <input class="form-control col me-5" type="file" name="img" accept=".jpg,.png,.jpeg">
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add Course</button>
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('add-course')}}" method="POST" enctype="multipart/form-data">
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
                                        <div class="mb-3">
                                            <label for="img" class="form-label fw-bold">Image</label>
                                            <img class="rounded-3 mb-2 mx-auto shadow img-thumbnail" src="@isset($c){{asset('storage/uploaded/'.$c.'/'.$c->img)}}@endisset" alt="@isset($c) <?=$c->judul?> @endisset" style="max-height:240px;width:100%;max-width:100%; object-fit: cover; object-position: 25% 25%;">
                                            <input class="form-control col me-5" type="file" name="img" accept=".jpg,.png,.jpeg">
                                        </div> 
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