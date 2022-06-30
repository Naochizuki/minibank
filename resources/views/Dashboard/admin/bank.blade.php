@extends('Dashboard.layout.main')

@section('title', 'Bank')

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
                        <div class="setting-nav gap-3">
                            <a href="{{ url('admin/dashboard/bank/tambah') }}">
                                <button class="btn-configuration">
                                    <div class="btn-configuration-icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <span class="btn-name">Tambah Konfigurasi</span>
                                </button>
                            </a>
                            <a href="{{ url('admin/dashboard/bank/update') }}">
                                <button class="btn-configuration">
                                    <div class="btn-configuration-icon">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <span class="btn-name">Edit Konfigurasi</span>
                                </button>
                            </a>
                        </div>
                        <div class="bank-data">
                            <div class="table-data">
                                <div class="table-header">
                                    <div class="table-tr">
                                        <div class="table-td-bank">No.</div>
                                        <div class="table-td-bank">Informasi</div>
                                        <div class="table-td-bank">Detail</div>
                                        <div class="table-td-bank">Aksi</div>
                                    </div>
                                </div>
                                @foreach ($configs as $config)
                                <div class="table-tr-group">
                                    <div class="table-tr">
                                        <div class="table-td-bank num">{{ $loop->iteration }}</div>
                                        <div class="table-td-bank">{{ $config->code }}</div>
                                        <div class="table-td-bank">{{ $config->code_value }}</div>
                                        <div class="table-td-bank flex justify-center gap-3">
                                            <a href="{{ url('admin/dashboard/bank/delete', $id=$config->id) }}">
                                                <button type='button' class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                    Delete
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection