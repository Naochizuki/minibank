@extends('Dashboard.layout.dashboard main')

@section('title', 'Dashboard')

@section('header-vertical-content')
    @include('Dashboard.partials.teller header')
@endsection

@section('content')
    <div class="main-fill-vertical transition-all-500"></div>
    <div class="main-fill-second">
        <div class="main-fill-horizontal"></div>
        <div class="main-container">
            <div class="main-content">
                <div class="bank-information-container">
                    <div class="setting-nav">
                        <button class="btn-add">
                            <div class="btn-add-icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <span class="btn-name">Tambah Teller</span>
                        </button>
                    </div>
                    <div class="bank-data">
                        <div class="table-data">
                            <div class="table-header">
                                <div class="table-tr">
                                    <div class="table-td">No.</div>
                                    <div class="table-td">ID</div>
                                    <div class="table-td">Rekening Tujuan</div>
                                    <div class="table-td">Tanggal Transaksi</div>
                                    <div class="table-td">Jenis Transaksi</div>
                                    <div class="table-td">Nominal</div>
                                    <div class="table-td">Aksi</div>
                                </div>
                            </div>
                            <div class="table-tr-group">
                                @foreach ($users as $user)
                                <div class="table-tr">
                                    <div class="table-td">{{ $loop->iteration }}</div>
                                    <div class="table-td flex justify-center">{{ $user->id }}</div>
                                    <div class="table-td">{{ $user->id_rekening }}</div>
                                    <div class="table-td">{{ $user->tgl_transaksi }}</div>
                                    <div class="table-td">{{ $user->jenis_transaksi }}</div>
                                    <div class="table-td">{{ $user->nominal }}</div>
                                    <div class="table-td">
                                        <button type='button' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Edit
                                        </button>
                                        <button type='button' class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
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
@endsection