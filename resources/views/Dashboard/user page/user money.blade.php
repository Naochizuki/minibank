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
        </div>
@endsection