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
                            <button class="btn-configuration">
                                <div class="btn-configuration-icon">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
                                <span class="btn-name">Konfigurasi</span>
                            </button>
                        </div>
                        <div class="bank-data">
                            <div class="table-data">
                                <div class="table-header">
                                    <div class="table-tr">
                                        <div class="table-td-bank">No.</div>
                                        <div class="table-td-bank">Informasi</div>
                                        <div class="table-td-bank">Detail</div>
                                    </div>
                                </div>
                                <div class="table-tr-group">
                                    <div class="table-tr">
                                        <div class="table-td-bank num">1</div>
                                        <div class="table-td-bank">Nama</div>
                                        <div class="table-td-bank">Minibank</div>
                                    </div>
                                    <div class="table-tr">
                                        <div class="table-td-bank num">2</div>
                                        <div class="table-td-bank">Alamat</div>
                                        <div class="table-td-bank">Surakarta</div>
                                    </div>
                                    <div class="table-tr">
                                        <div class="table-td-bank num">3</div>
                                        <div class="table-td-bank">Logo</div>
                                        <div class="table-td-bank">M</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection