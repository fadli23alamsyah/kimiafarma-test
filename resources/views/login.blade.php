@extends('layouts.main')

@section('body')
    <main class="h-screen flex bg-slate-100">
        <section class="m-auto w-1/3 flex flex-col items-center">
            <h1 class="mb-5 text-[2.3rem] font-extrabold">Login App</h1>
            @if (session()->has('success'))
                <div class="alert alert-success shadow-lg mb-3">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-error shadow-lg mb-3">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>{{ session('error') }}</span>
                    </div>
                </div>
            @endif

            <div class="card w-full bg-base-100 shadow-xl">
                <div class="card-body">
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="email" placeholder="Email" name="email" class="input input-bordered input-accent w-full @error('email') is-invalid @enderror" value="{{ old('email') }}" required/>
                            @error('email')
                                <small class="text-red-600">{{ message }}</small>
                            @enderror
                        </div>
                        <div>
                            <input type="password" placeholder="Password" name="password" class="input input-bordered input-accent w-full required"/>
                        </div>
                        <div class="w-full flex">
                            <p class="my-auto">Tidak memiliki akun</p>
                            <a href="/register" class="transition delay-200 duration-300 ease-in-out rounded-md px-2 hover:bg-green-500 hover:text-white">Register</a>
                        </div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection