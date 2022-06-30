@extends('Dashboard.layout.main')

@section('title', 'View')

@section('header-vertical-content')
    @include('Dashboard.partials.nasabah-header')
@endsection

@section('content')
    <div class="main-fill-vertical transition-all-500"></div>
    <div class="main-fill-second">
        <div class="main-fill-horizontal"></div>
        <div class="main-container">
            <div class="main-content">
                <div class="bank-information-container">
                    <div class="setting-nav">
                        <a href="{{ url('/nasabah/dashboard/mutasi') }}">
                            <button class="btn-add">
                                <span class="btn-name">Back</span>
                            </button>
                        </a>
                    </div>
                    <div class="bank-data">
                        <div class="table-data">
                            <div class="table-header">
                                <div class="table-tr">
                                    <div class="table-td">No.</div>
                                    <div class="table-td">Tanggal Transaksi</div>
                                    <div class="table-td">Jenis Transaksi</div>
                                    <div class="table-td">Nominal</div>
                                </div>
                            </div>
                            <div class="table-tr-group">
                                @foreach ($transaksis as $transaksi)
                                <div class="table-tr">
                                    <div class="table-td">{{ $loop->iteration }}</div>
                                    <div class="table-td">{{ $transaksi->tgl_transaksi }}</div>
                                    <div class="table-td">{{ $transaksi->jenis_transaksi }}</div>
                                    <div class="table-td">{{ $transaksi->nominal }}</div>
                                </div>                                    
                                @endforeach
                            </div>
                        </div>
                        <div class="total-money-name mt-4">
                            <span class="title-total-money">Saldo : </span>
                            <span class="total text-xl font-semibold">@currency($transaksis[$transaksis->count()-1]->saldo)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection