@extends('layout.layout')
@section('content')
   
            <div class="container">
                <div class="row g-2">
                    @if($u->id == session('uid'))
                        <div class="col-8">    
                            <div class="p-3 border rounded shadow-sm my-2 p-4 mb-4">
                                <h1 class="Title-center">Profile Settings</h1>
                                <form action="{{ route('profil_edit')}}" method="POST" enctype="multipart/form-data">
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
                                                <input class="form-control col me-5" type="file" name="img" id="formFile" accept=".jpg,.png,.jpeg">
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{ $u->id }}" name="id">
                                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                                </form>                                    
                            </div>
                        </div>    
                    @endif
                    <div class="col-4">   
                        <div class="p-3 border rounded shadow-sm my-2 p-4 mb-4">
                            @if($u->profilePic == "")
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                            @else
                                <img src="{{asset('storage/uploaded/profile/'.$u->profilePic)}}" style="max-height:15vh;" class="rounded-circle" alt="user" />
                            @endif
                                <h3 class="text-p1">{{$u->name}}</h3>
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