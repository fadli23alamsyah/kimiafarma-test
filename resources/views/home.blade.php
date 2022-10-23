@extends('layouts.main')

@section('body')
<main class="min-h-screen bg-slate-100">
    <div class="container mx-auto pt-4">
        <div class="navbar bg-base-100 rounded-2xl mb-[2.5rem] drop-shadow-lg">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl" href="/">Kimia Farma Apotek</a>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 22a8 8 0 1 1 16 0h-2a6 6 0 1 0-12 0H4zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/></svg>
                    </label>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="/profil">Profil</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    
        @yield('content')
    </div>

</main>
@endsection