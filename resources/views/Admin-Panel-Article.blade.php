@extends('layout.layout-admin')
@section('content')

        <section id="user_management">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Chapter</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['article'] as $a)

                        <tr>
                            <td>{{ $a->chapter }}</td>
                            <td>
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit-{{$a->id}}">Edit</button>    
                                <button type="button" class="btn btn-danger" onclick="if (confirm('Yakin ingin menghapus chapter tersebut ?')) {window.location.href = '{{ route('delete-chapter', ['idCourse' => $data['cid'],'idArticle' => $a->id]) }}';}">Delete</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit-{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('edit-article',$data['cid'])}}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                <label for="chapter" class="form-label fw-bold">Chapter</label>
                                                <input type="text" class="form-control" name="chapter" value="{{ $a->chapter  }}">
                                            </div>
                                            <div class="mb-2">
                                                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                                <textarea type="text" class="form-control" name="deskripsi" rows="10" value="">{{$a->deskripsi}}</textarea>
                                            </div>
                                            <input type="hidden" value="{{ $a->id }}" name="id">
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-secondary" value="Edit">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add Article</button>
                <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('add-article')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-2">
                                            <label for="chapter" class="form-label fw-bold">Chapter</label>
                                            <input type="text" class="form-control" name="chapter" value="">
                                        </div>
                                        <div class="mb-2">
                                            <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                            <textarea type="text" class="form-control" name="deskripsi" rows="10" value=""></textarea>
                                        </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="courseId" value="{{$data['cid']}}">
                                        <input type="submit" class="btn btn-warning" value="Simpan">
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection        

