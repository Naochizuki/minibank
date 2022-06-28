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
                <div class="greeting border-transparent shadow-lg rounded-xl">
                    {{-- {{ dd(Auth::user()) }} --}}
                    <span class="greet">Selamat Datang <span class="user-account text-green-400">{{ Auth::user() }}</span> di
                        Sistem Informasi Minibank</span>
                    <span class="date">{{ Carbon\Carbon::now('Asia/Jakarta')->format('l') }}, {{ Carbon\Carbon::now('Asia/Jakarta')->format('d-m-Y') }}</span>
                </div>
                <div class="statistic-container border-transparent shadow-lg rounded-xl">
                    <div class="title-statistic">
                        <span>Statistik Data Minibank</span>
                    </div>
                    <div class="statistic-category border-transparent rounded-xl">
                        <div class="s-category border-transparent shadow-lg rounded-xl">
                            <div class="s-category-name rounded-t-xl">
                                <div class="s-c-name-icon">
                                    <i class="fa-solid fa-users scni"></i>
                                </div>
                                <div class="s-c-name-detail">
                                    <span class="count-category">20</span>
                                    <span class="active-category">Nasabah Aktif</span>
                                    <span class="spesific-category">Dari {{ $nasabahs->count() }} Nasabah</span>
                                </div>
                            </div>
                            <a href="{{ url('/admin/dashboard/nasabah') }}" class="s-detail">
                                <span class="detail-name">Lihat Detail</span>
                                <div class="detail-icon">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </a>
                        </div>
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
                <div class="transaction-info-container border-transparent">
                    <div class="transaction-info-day border-transparent shadow-lg rounded-xl">
                        <div class="info">
                            <span class="title">Transaksi hari ini</span>
                        </div>
                        <div class="transaction">
                            <div class="transaction-in-container border-transparent shadow-lg rounded-xl">
                                <div class="transaction-name rounded-t-xl">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-money-bill-wave it"></i>
                                    </div>
                                    <span>Pemasukan</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    @php
                                        $count = 0;
                                        foreach ($todayIns as $today) {
                                            $count += $today->nominal;
                                        }
                                        echo "<span>" . $count . "</span>";
                                    @endphp
                                </div>
                            </div>
                            <div class="transaction-out-container border-transparent shadow-lg rounded-xl">
                                <div class="transaction-name rounded-t-xl">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-coins it"></i>
                                    </div>
                                    <span>Pengeluaran</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    @php
                                        $count = 0;
                                        foreach ($todayOuts as $today) {
                                            $count += $today->nominal;
                                        }
                                        echo "<span>" . $count . "</span>";
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transaction-info-week border-transparent shadow-lg rounded-xl">
                        <div class="info">
                            <span class="title">Transaksi minggu ini</span>
                        </div>
                        <div class="transaction">
                            <div class="transaction-in-container border-transparent shadow-lg rounded-xl">
                                <div class="transaction-name rounded-t-xl">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-money-bill-wave it"></i>
                                    </div>
                                    <span>Pemasukan</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    @php
                                    $count = 0;
                                    foreach ($weekIns as $today) {
                                        $count += $today->nominal;
                                    }
                                    echo "<span>" . $count . "</span>";
                                @endphp
                                </div>
                            </div>
                            <div class="transaction-out-container border-transparent shadow-lg rounded-xl">
                                <div class="transaction-name rounded-t-xl">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-coins it"></i>
                                    </div>
                                    <span>Pengeluaran</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    @php
                                        $count = 0;
                                        foreach ($weekOuts as $today) {
                                        $count += $today->nominal;
                                        }
                                        echo "<span>" . $count . "</span>";
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="total-money-container border-transparent shadow-lg rounded-xl">
                    <div class="total-money-name">
                        <span class="title-total-money">Saldo Keseluruhan sampai dengan hari ini</span>
                    </div>
                    <div class="total-money-value">
                        <div class="money-category">
                            <span class="category-name">Total Pemasukan: Rp.</span>
                            @php
                                $count = 0;
                                foreach ($totalIns as $total) {
                                    $count += $total->nominal;
                                }
                                echo '<span class="pemasukan">' . $count . "</span>";
                            @endphp
                        </div>
                        <div class="money-category">
                            <span class="category-name">Total Pengeluaran: Rp.</span>
                            @php
                                $count = 0;
                                foreach ($totalOuts as $total) {
                                    $count += $total->nominal;
                                }
                                echo '<span class="pengeluaran">' . $count . "</span>";
                            @endphp
                        </div>
                        <div class="money-category">
                            <span class="category-name">Total Saldo Minibank: Rp.</span>
                            @php
                                $count = 0;
                                foreach ($rekenings as $rekening) {
                                    $count += $rekening->saldo;
                                }
                                echo '<span class="total">' . $count . "</span>";
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection