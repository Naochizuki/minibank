@extends('Dashboard.layout.dashboard main')

@section('title', 'Dashboard')

@section('header-vertical-content')
    @include('Dashboard.partials.admin header')
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
                                        <div class="btn-edit"><i class="fa-solid fa-pen"></i></div>
                                        <div class="btn-delete"><i class="fa-solid fa-trash-can"></i></div>
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
