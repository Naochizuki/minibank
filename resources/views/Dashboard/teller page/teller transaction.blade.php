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
                <div class="s-category border-transparent shadow-lg rounded-xl">
                    <div class="s-category-name rounded-t-xl">
                        <div class="s-c-name-icon">
                            <i class="fa-solid fa-money-bill-wave scni"></i>
                        </div>
                        <div class="s-c-name-detail">
                            @php
                                $count = 0;
                                foreach ($todayIns as $today) {
                                    $count += $today->nominal;
                                }
                                echo '<span class="count-category">' . $count . "</span>";
                            @endphp
                            <span class="active-category">Transaksi Masuk</span>
                            <span class="spesific-category">Masuk Hari Ini</span>
                        </div>
                    </div>
                    <a href="{{ url('/teller/dashboard/transaksi') }}" class="s-detail">
                        <span class="detail-name">Tambah Setoran</span>
                        <div class="detail-icon">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
                <div class="s-category border-transparent shadow-lg rounded-xl">
                    <div class="s-category-name rounded-t-xl">
                        <div class="s-c-name-icon">
                            <i class="fa-solid fa-coins scni"></i>
                        </div>
                        <div class="s-c-name-detail rounded-t-xl">
                            @php
                                $count = 0;
                                foreach ($todayOuts as $today) {
                                    $count += $today->nominal;
                                }
                                echo '<span class="count-category">' . $count . "</span>";
                            @endphp
                            <span class="active-category">Transaksi Keluar</span>
                            <span class="spesific-category">Keluar Hari Ini</span>
                        </div>
                    </div>
                    <a href="{{ url('/teller/dashboard/transaksi') }}" class="s-detail rounded-t-xl">
                        <span class="detail-name">Tambah Penarikan</span>
                        <div class="detail-icon">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

@endsection