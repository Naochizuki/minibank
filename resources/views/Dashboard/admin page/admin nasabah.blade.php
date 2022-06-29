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
                            <a href="{{ url('/admindashboard/nasabah/create') }}" class="btn-name">Tambah Nasabah</a>
                        </button>
                    </div>
                    <div class="bank-data">
                        <div class="flex justify-center w-full mt-2 bg-white overflow-hidden shadow sm:rounded-lg">
                            <div class="table-data">
                                <div class="table-header">
                                    <div class="table-tr">
                                        <div class="table-td-bank">Id</div>
                                        <div class="table-td-bank">Id User</div>
                                        <div class="table-td-bank">Nama</div>
                                        <div class="table-td-bank">Aksi</div>
                                    </div>
                                </div>
                                @foreach ($nasabahs as $nasabah)
                                <div class="table-tr-group">
                                    <div class="table-tr">
                                        <div class="table-td-bank num">{{ $nasabah->id }}</div>
                                        <div class="table-td-bank num">{{ $nasabah->id_user }}</div>
                                        <div class="table-td-bank">{{ $nasabah->nama }}</div>
                                        <div class="table-td-bank flex justify-center">
                                            <a href="{{ url('admin/dashboard/nasabah', $id=$nasabah->id) }}">    
                                                <button type='button' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    View
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
    </div>
    
@endsection