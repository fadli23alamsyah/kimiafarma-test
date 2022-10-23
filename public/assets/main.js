function showFormModal(data){
    var modal = document.getElementById("modal-obat")
    var csrf = document.querySelector('meta[name="_token"]').content;

    var form = `
        <input type="checkbox" checked="checked" id="form-obat-modal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <h3 class="font-bold text-lg">Data Obat</h3>
                <form action="/obat${((!data.nama_obat)? '': '/' + data.id)}" method="post">
                    <input type="hidden" name="_token" value="${csrf}">
                    ${ (!data.nama_obat)? '' : '<input type="hidden" name="_method" value="put">' }
                    <input type="text" value="${data.nama_obat ?? ''}" placeholder="Nama Obat" name="nama_obat" class="input input-bordered input-accent w-full mb-3" required/>
                    <input type="text" value="${data.dibuat ?? ''}" placeholder="Dibuat"  name="dibuat" class="input input-bordered input-accent w-full mb-3" required/>
                    <input type="date" value="${data.tanggal_kadaluarsa ?? ''}" placeholder="Tanggal Kadaluarsa" name="tanggal_kadaluarsa" class="input input-bordered input-accent w-full" required/>
                    <div class="modal-action">
                        <button onclick="removeModal()" class="btn btn-error">Batal</button>
                        <button class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    `

    modal.innerHTML = form
}

function showDeleteModal(data){
    var modal = document.getElementById("modal-obat")
    var csrf = document.querySelector('meta[name="_token"]').content


    var content = `
        <input type="checkbox" checked="checked" id="modal-delete" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box">
                <form action="/obat/${data.id}" method="post">
                    <input type="hidden" name="_token" value="${csrf}">
                    <input type="hidden" name="_method" value="delete">
                    <h3 class="font-bold text-lg">Hapus Obat</h3>
                    <p class="py-4">Apakah anda yakin ingin menghapus obat ${ data.nama_obat } ?</p>
                    <div class="modal-action">
                        <button onclick="removeModal()" class="btn btn-error">Batal</button>
                        <button class="btn btn-success">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    `

    modal.innerHTML = content
}

function removeModal(){
    var modal = document.getElementById("modal-obat")
    modal.innerHTML = ''
}