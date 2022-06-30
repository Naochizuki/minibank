@extends('Dashboard.layout.main')

@section('title', 'Dashboard')

@section('header-vertical-content')
    @include('Dashboard.partials.nasabah-header')
@endsection

@section('content')
    <div class="main-content">
        <div class="relative ml-12prc flex items-center min-h-screen">
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/3 -translate-y-1/2">
                <div class="mb=2 text-xs text-center font-thin dark:text-white">Dashboard</div>
                <div class="mb=2 text-4xl text-center font-black dark:text-white">ALWAYS BY YOUR SIDE</div>
                <div class="p-5"></div>
                <div class="container mx-auto flex gap-x-6">
                    <div class="text-sm border rounded-lg shadow-lg p-10 relative bg-white dark:bg-slate-800">
                        <div class="mb-5 flex justify-center items-center">
                            <i class="fa-solid fa-sack-dollar text-7xl text-purple-600 dark:text-indigo-600"></i>
                        </div>
                        <p>
                            Layanan untuk cek tabungan beserta jumlah saldo yang tersedia
                        </p>
                        <div class="mt-5 text-purple-600 dark:text-indigo-600">
                            <a href="{{ url('nasabah/dashboard/tabungan') }}">
                                <p class="text-center">More ></p>
                            </a>
                        </div>
                    </div>
                    <div class="text-sm border rounded-lg shadow-lg p-10 relative bg-white dark:bg-slate-800">
                        <div class="mb-5 flex justify-center items-center">
                            <i class="fa-solid fa-money-bill-transfer text-7xl text-purple-600 dark:text-indigo-600"></i>
                        </div>
                        <p>
                            Layanan bertransaksi ke sesama bank maupun antar bank
                        </p>
                        <div class="mt-5 absolute bottom-9 text-purple-600 dark:text-indigo-600">
                            <a href="{{ url('nasabah/dashboard/transaksi') }}">
                                <p class="text-center">More ></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
