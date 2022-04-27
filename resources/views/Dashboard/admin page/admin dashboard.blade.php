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
                <div class="greeting">
                    <span class="greet">Selamat Datang <span class="user-account">Abiyyu Dzaky Muhammad</span> di
                        Sistem Informasi Minibank</span>
                    <span class="date">Rabu, 27 April 2022</span>
                </div>
                <div class="statistic-container">
                    <div class="title-statistic">
                        <span>Statistik Data Minibank</span>
                    </div>
                    <div class="statistic-category">
                        <div class="s-category">
                            <div class="s-category-name">
                                <div class="s-c-name-icon">
                                    <i class="fa-solid fa-users scni"></i>
                                </div>
                                <div class="s-c-name-detail">
                                    <span class="count-category">1</span>
                                    <span class="active-category">Nasabah Aktif</span>
                                    <span class="spesific-category">Dari 100 Nasabah</span>
                                </div>
                            </div>
                            <a href="/" class="s-detail">
                                <span class="detail-name">Lihat Detail</span>
                                <div class="detail-icon">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="s-category">
                            <div class="s-category-name">
                                <div class="s-c-name-icon">
                                    <i class="fa-solid fa-money-bill-wave scni"></i>
                                </div>
                                <div class="s-c-name-detail">
                                    <span class="count-category">1</span>
                                    <span class="active-category">Transaksi Masuk</span>
                                    <span class="spesific-category">Masuk Hari Ini</span>
                                </div>
                            </div>
                            <a href="/" class="s-detail">
                                <span class="detail-name">Tambah Setoran</span>
                                <div class="detail-icon">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="s-category">
                            <div class="s-category-name">
                                <div class="s-c-name-icon">
                                    <i class="fa-solid fa-coins scni"></i>
                                </div>
                                <div class="s-c-name-detail">
                                    <span class="count-category">1</span>
                                    <span class="active-category">Transaksi Keluar</span>
                                    <span class="spesific-category">Keluar Hari Ini</span>
                                </div>
                            </div>
                            <a href="/" class="s-detail">
                                <span class="detail-name">Tambah Penarikan</span>
                                <div class="detail-icon">
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="transaction-info-container">
                    <div class="transaction-info-day">
                        <div class="info">
                            <span class="title">Transaksi hari ini</span>
                        </div>
                        <div class="transaction">
                            <div class="transaction-in-container">
                                <div class="transaction-name">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-money-bill-wave it"></i>
                                    </div>
                                    <span>Pemasukan</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    <span>100.000,00</span>
                                </div>
                            </div>
                            <div class="transaction-out-container">
                                <div class="transaction-name">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-coins it"></i>
                                    </div>
                                    <span>Pengeluaran</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    <span>100.000,00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transaction-info-week">
                        <div class="info">
                            <span class="title">Transaksi minggu ini</span>
                        </div>
                        <div class="transaction">
                            <div class="transaction-in-container">
                                <div class="transaction-name">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-money-bill-wave it"></i>
                                    </div>
                                    <span>Pemasukan</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    <span>100.000,00</span>
                                </div>
                            </div>
                            <div class="transaction-out-container">
                                <div class="transaction-name">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-coins it"></i>
                                    </div>
                                    <span>Pengeluaran</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    <span>100.000,00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transaction-info-month">
                        <div class="info">
                            <span class="title">Transaksi bulan ini</span>
                        </div>
                        <div class="transaction">
                            <div class="transaction-in-container">
                                <div class="transaction-name">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-money-bill-wave it"></i>
                                    </div>
                                    <span>Pemasukan</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    <span>100.000,00</span>
                                </div>
                            </div>
                            <div class="transaction-out-container">
                                <div class="transaction-name">
                                    <div class="icon-transaction">
                                        <i class="fa-solid fa-coins it"></i>
                                    </div>
                                    <span>Pengeluaran</span>
                                </div>
                                <div class="mount-container">
                                    <span>Rp. </span>
                                    <span>100.000,00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="total-money-container">
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
                        <div class="money-category">
                            <span class="category-name">Total Saldo Minibank: Rp.</span>
                            <span class="total">100.000,00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
