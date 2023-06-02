@extends('layout.layout-admin')
@section('content')

        <section id="user_management">
            <div class="container table-bel">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th scope="col">ID Pengguna</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($member as $m)

                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->email  }}</td>
                        <td>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit-{{$m->id}}">Ubah</button>    
                            <button type="button" class="btn btn-danger" onclick=confirmBox()>Hapus</button>
                            <script>
                                function confirmBox() {
                                    if (confirm("Yakin ingin menghapus data user tersebut ?")) {window.location.href = "{{ route('delete-user', $m->id) }}";};
                                }
                            </script>
                        </td>
                    </tr>
                    <div class="modal fade" id="edit-{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pengguna</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('edit-user')}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-2">
                                            <label for="email" class="form-label fw-bold">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $m->email  }}">
                                        </div>
                                        <div class="mb-2">
                                            <label for="password" class="form-label fw-bold">Password</label>
                                            <input type="password" class="form-control" name="password" value="">
                                        </div>
                                        <input type="hidden" value="{{ $m->id }}" name="id">
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-secondary" value="Simpan">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
@endsection        

