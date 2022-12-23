@extends('layout.layout')
@section('content')

        <section id="course_mngmnt">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Course</th>
                        <th scope="col">Nama Course</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>py_01</td>
                        <td>Python</td>
                        <td>python adalah..</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>java_02</td>
                        <td>Java</td>
                        <td>Java adalah ...</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Html_03</td>
                        <td>HTML</td>
                        <td>HTML adalah..</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>Bootstrap</td>
                        <td>Bootstrap4</td>
                        <td>Bootstrap adalah ...</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <div class="mb-2">
                                        <label for="kode" class="form-label fw-bold">Nama Course</label>
                                        <input type="text" class="form-control" name="Nama_Course" value="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="judul" class="form-label fw-bold">Deskripsi</label>
                                        <input type="text" class="form-control" name="Deskripsi" value="">
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-warning" value="Ubah Data">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
@endsection