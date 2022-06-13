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
                        <div class="mt-2 bg-white overflow-hidden shadow sm:rounded-lg">
                            <table class="table-fixed">
                                <thead class="bg-gray-500">
                                    <th class="px-4 py-2 text-white">Id</th>
                                    <th class="px-4 py-2 text-white">Id User</th>
                                    <th class="px-4 py-2 text-white">Nama</th>
                                    <th class="px-4 py-2 text-white">Alamat</th>
                                    <th class="px-4 py-2 text-white">NIK</th>
                                    <th class="px-4 py-2 text-white">Jenis Kelamin</th>
                                    <th class="px-4 py-2 text-white">Nama Ibu</th>
                                    <th class="px-4 py-2 text-white">Tgl Lahir</th>
                                    <th class="px-4 py-2 text-white">No Telp</th>
                                    <th class="px-4 py-2 text-white">Aksi</th>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                Edit
                                            </button>
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection