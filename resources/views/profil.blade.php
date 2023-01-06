@extends('layout.layout')
@section('content')
   
            <div class="container">
                <div class="row g-2">
                    <div class="col-8">    
                        <div class="p-3 border rounded shadow-sm my-2 p-4 mb-4">
                            <h1 class="Title-center">Profile Settings</h1>
                            <form action="{{ route('profil_edit')}}" method="POST">
                                    @csrf
                                    <div class="row mt-3">
                                        <div class="col-md-12"><label class="labels">Nama</label><input type="text" class="form-control" name="name" value="{{$u->name}}" placeholder=""></div>
                                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="email" value="{{$u->email}}" placeholder=""></div>
                                        <div class="col-md-12"><label class="labels">No HP</label><input type="text" class="form-control" name="no_hp" value="{{$u->no_hp}}" placeholder=""></div>
                                        <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" name="alamat" value="{{$u->alamat}}" placeholder=""></div>
                                        <div class="col-md-12"><label class="labels">Biography</label><input type="text" class="form-control" name="biography" value="{{$u->biography}}" placeholder=""></div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <label for="formFile" class="form-label">Upload Picture</label>
                                            <input class="form-control col me-5" type="file" id="formFile" accept=".jpg,.png,.jpeg">
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{ $u->id }}" name="id">
                                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                            </form>                                    
                        </div>
                    </div>    
                    <div class="col-4">   
                        <div class="p-3 border rounded shadow-sm my-2 p-4 mb-4">
                            <img src="https://randomuser.me/api/portraits/women/79.jpg" class="rounded-circle" alt="user" />
                                <h3 class="text-p1">{{$u->name}}</h3>,#{{$u->id}}
                                <p class="text-p1">{{$u->email}} <br> {{$u->no_hp}}<br> {{$u->alamat}}</p>
                                <hr>
                            <div class="skills">
                                <h6>Biography</h6>
                                    " {{$u->biography}} "
                            </div>
                        </div>
                    </div>    
                </div>
            </div>


    @endsection