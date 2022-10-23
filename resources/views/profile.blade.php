@extends('home')

@section('content')
    <div class="w-5/6 mx-auto">
        <h1 class="mb-5 text-[2rem] font-extrabold">Profil User</h1>
        <form action="/profil/{{ $user['id'] }}" method="post">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Nama" name="name" value="{{ $user['name'] }}" class="input input-bordered input-accent w-full mb-3" required/>
            <input type="email" placeholder="Email" name="email" value="{{ $user['email'] }}" class="input input-bordered input-accent w-full mb-3" required/>
            <input type="password" placeholder="Password" name="password" class="input input-bordered input-accent w-full" />
            <small>*Kosongkan input password jika tidak ingin mengubah password</small>
            <div class="flex justify-end mt-5">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div> 

@endsection