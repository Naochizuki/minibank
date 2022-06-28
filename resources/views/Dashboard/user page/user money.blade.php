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
                    <span class="title-total-money">Saldo Keseluruhan sampai dengan hari ini</span>
                </div>
                <div class="total-money-value">
                    <div class="money-category">
                        <span class="category-name">Total Pemasukan: Rp.</span>
                        <span class="pemasukan">100.000,00</span>
                    </div>
                    <div class="money-category">
                        <span class="category-name">Total Pengeluaran: Rp.</span>
                        <span class="pengeluaran">100.000,00</span>
                    </div>
                </div>
            </div>
        </div>
@endsection