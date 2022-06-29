@extends('Dashboard.layout.dashboard main')

@section('title', 'Tabungan')

@section('header-vertical-content')
    @include('Dashboard.partials.user header')
@endsection

@section('content')
<div class="main-fill-vertical transition-all-500"></div>
<div class="main-fill-second">
    <div class="main-fill-horizontal"></div>
    <div class="main-container">
        <div class="main-content">
            <div class="total-money-container border-transparent shadow-lg rounded-xl">
                <div class="total-money-name">
                    <span class="title-total-money">Saldo Keseluruhan sampai dengan hari ini: </span>
                    <span class="total text-xl font-semibold">@currency($transIn[0]->saldo)</span>
                </div>
                <div class="total-money-value">
                    <div class="money-category">
                        <span class="category-name">Total Pemasukan: </span>
                        @php
                            $count = 0;
                            foreach ($transIn as $trans) {
                                $count += $trans->nominal;
                            }
                        @endphp
                        <span class="pemasukan">@currency($count)</span>
                    </div>
                    <div class="money-category">
                        <span class="category-name">Total Pengeluaran: Rp.</span>
                        @php
                            $count = 0;
                            foreach ($transOut as $trans) {
                                $count += $trans->nominal;
                            }
                        @endphp
                        <span class="pengeluaran">@currency($count)</span>
                    </div>
                </div>
            </div>
            <div class="total-money-container border-transparent shadow-lg rounded-xl">
                <div class="total-money-name">
                    <span class="title-total-money">Informasi Tabungan</span>
                    <div class="money-category">
                        <span class="category-name w-58 inline-block">Pemilik Rekening</span>
                        <span>: {{ $nasabah[0]->nama }}</span>
                    </div>
                </div>
                @foreach ($rek as $rekening)
                <div class="total-money-value">
                    <div class="money-category">
                        <span class="category-name w-58 inline-block">Nomor Rekening</span>
                        <span>: {{ $rekening->no_rekening }}</span>
                    </div>
                    <div class="money-category">
                        <span class="category-name w-58 inline-block">Tanggal Pembuatan Rekening</span>
                        <span>: {{ $rekening->created_at->format('d-m-Y') }}</span>
                    </div>
                    <div class="money-category">
                        <span class="category-name w-58 inline-block">Masa Berlaku</span>
                        <span>: {{ $rekening->created_at->addDay(1825)->format('d-m-Y') }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
@endsection