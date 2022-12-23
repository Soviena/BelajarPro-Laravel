@extends('layout.layout')
@section('content')

        <section id="user_management">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>us01</td>
                        <td>Robert Pattinson</td>
                        <td>robert@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#edit">Edit</button>    
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data user tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>us02</td>
                        <td>Robert Pattinson</td>
                        <td>robert@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#edit">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data user tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>us03</td>
                        <td>Robert Pattinson</td>
                        <td>robert@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#edit">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data user tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>us04</td>
                        <td>Robert Pattinson</td>
                        <td>robert@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#edit">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data user tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td>us05</td>
                        <td>Robert Pattinson</td>
                        <td>robert@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#edit">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus data user tersebut ?')) {window.location.href = '';}">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>


                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <div class="mb-2">
                                        <label for="email" class="form-label fw-bold">Email</label>
                                        <input type="email" class="form-control" name="email" value="">
                                    </div>
                                    <div class="mb-2">
                                        <label for="password" class="form-label fw-bold">Password</label>
                                        <input type="password" class="form-control" name="password" value="">
                                    </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-secondary" value="Edit">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection        

