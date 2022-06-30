@extends('Dashboard.layout.main')

@section('title', 'Customer Service')

@section('header-vertical-content')
    @include('Dashboard.partials.admin-header')
@endsection

@section('content')
    <div class="main-fill-vertical transition-all-500"></div>
    <div class="main-fill-second">
        <div class="main-fill-horizontal"></div>
        <div class="main-container">
            <div class="main-content">
                <div class="bank-information-container">
                    <div class="setting-nav">
                        <button class="btn-add" data-toggle="modal" data-target="#exampleModal">
                            <div class="btn-add-icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <span class="btn-name">Tambah Customer Service</span>
                        </button>
                    </div>
                    <div class="bank-data">
                        <div class="table-data">
                            <div class="table-header">
                                <div class="table-tr">
                                    <div class="table-td">No.</div>
                                    <div class="table-td">ID</div>
                                    <div class="table-td">Nama</div>
                                    <div class="table-td">Keterangan</div>
                                    <div class="table-td">Aksi</div>
                                </div>
                            </div>
                            <div class="table-tr-group">
                                @foreach ($users as $user)
                                <div class="table-tr">
                                    <div class="table-td">{{ $loop->iteration }}</div>
                                    <div class="table-td flex justify-center">{{ $user->id }}</div>
                                    <div class="table-td">{{ $user->nama }}</div>
                                    <div class="table-td">Lorem ipsum dolor sit amet.</div>
                                    <div class="table-td">
                                        <button data-toggle="modal" data-target="#editModal{{$user->id}}"><div class="btn-edit"><i class="fa-solid fa-pen"></i></div></button>
                                        <button data-toggle="modal" data-target="#deleteModal{{$user->id}}"><div class="btn-delete"><i class="fa-solid fa-trash-can"></i></div></button>
                                    </div>
                                </div>                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <form method="POST" action="{{url('admin/create')}}">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah CS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama">
            @if ($errors->has('nama'))
              <div class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('nama')}}</strong>
              </div>
            @endif
        </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

@foreach ($users as $user)
<div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <form method="POST" action="{{url('admin/update/'.$user->id)}}">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit CS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control {{$errors->has('nama') ? 'is-invalid' : ''}}" id="nama" name="nama">
            @if ($errors->has('nama'))
              <div class="invalid-feedback" role="alert">
                 <strong>{{$errors->first('nama')}}</strong>
              </div>
            @endif
        </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form method="POST" action="{{url('/admin/delete/'.$user->id)}}">
        @csrf
      <div class="modal-body">
            <p>Apakah Anda Yakin Ingin Menghapus CS ?</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Ya</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
