@extends('home')

@section('content')
    <div class="w-5/6 mx-auto">
        <div class="flex justify-between">
            <h1 class="mb-5 text-[2rem] font-extrabold">Daftar Obat</h1>
            <button onclick="showFormModal('data', 'link')" class="btn btn-secondary">Tambah</button>
        </div>
        <div class="overflow-x-auto shadow-md">
            <table class="table w-full ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Dibuat</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obats as $obat)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $obat->nama_obat }}</td>
                            <td>{{ $obat->dibuat }}</td>
                            <td>{{ $obat->tanggal_kadaluarsa }}</td>
                            <td>
                                <button onclick="showFormModal({{ $obat }})" class="btn btn-warning">Edit</button>
                                <button onclick="showDeleteModal({{ $obat }})" class="btn btn-outline btn-error">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="modal-obat"></div>
@endsection