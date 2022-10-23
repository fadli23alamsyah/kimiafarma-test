@extends('layouts.main')

@section('body')
    <main class="h-screen flex bg-slate-100">
        <section class="m-auto w-1/3 flex flex-col items-center">
            <h1 class="mb-5 text-[2.3rem] font-extrabold">Register App</h1>
            <div class="card w-full bg-base-100 shadow-xl">
                <div class="card-body">
                    <form action="/register" method="post">
                        @csrf
                        <input type="text" placeholder="Nama" name="name" class="input input-bordered input-accent w-full mb-3" required/>
                        <input type="email" placeholder="Email" name="email" class="input input-bordered input-accent w-full mb-3" required/>
                        <input type="password" placeholder="Password" name="password" class="input input-bordered input-accent w-full" required/>
                        <div class="w-full flex">
                            <p class="my-auto">Sudah punya akun</p>
                            <a href="/login" class="transition delay-200 duration-300 ease-in-out rounded-md px-2 hover:bg-green-500 hover:text-white">Login</a>
                        </div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection