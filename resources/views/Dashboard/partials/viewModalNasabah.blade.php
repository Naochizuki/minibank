@for ($i = 0; $i < $nasabah->count(); $i++)
<div class="modal fade" id="viewModal{{$nasabah[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Informasi Nasabah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">ID User</label>
                    <input type="text" class="form-control" id="id_user" name="id_user" disabled value="{{ $nasabah[$i]->id_user }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" disabled value="{{ $nasabah[$i]->nama }}">
                </div>
                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control" id="email" name="email" disabled value="{{ $users[$i]->email }}">
                </div>
                <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" disabled value="{{ $nasabah[$i]->alamat }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nomor Induk Kependudukan</label>
                    <input type="text" class="form-control" id="nik" name="nik" disabled value="{{ $nasabah[$i]->nik }}">
                </div>
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled value="{{ $nasabah[$i]->jenis_kelamin }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Ibu</label>
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" disabled value="{{ $nasabah[$i]->nama_ibu }}">
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" disabled value="{{ $nasabah[$i]->tgl_lahir }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nomor Telepon</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" disabled value="{{ $nasabah[$i]->tgl_lahir }}">
                </div>
            </div>
            <div class="modal-footer">
                <button data-toggle="modal" data-target="#deleteModal{{$nasabah[$i]->id}}"><div class="btn-delete">Delete</div></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal{{$nasabah[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST" action="{{url('/admin/dashboard/nasabah/delete/', $id=$nasabah[$i]->id)}}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Informasi Nasabah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Nasabah ?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endfor