@extends('Dashboard.layout.main')

@section('title', 'Edit Nasabah')

@section('header-vertical-content')
    @include('Dashboard.partials.admin-header')
@endsection

@section('content')
    <div class="main-fill-vertical transition-all-500"></div>
    <div class="main-fill-second">
        <div class="main-fill-horizontal"></div>
        <div class="main-container">
            <div class="main-content">
                @foreach ($nasabah as $nasa)
                <div class="flex flex-col items-center border border-solid border-slate-200 rounded-lg bg-white shadow-md shadow-slate-400 mt-10 p-4">
                    <form action="{{ url('admin/dashboard/nasabah/update'), $id=$nasa->id }}" method="post">
                        @csrf
                        <div class="flex flex-row gap-6">
                            <input type="hidden" name="id" id="id" value="{{ $nasa->id }}">
                            <input type="hidden" name="id_user" id="id_user" value="{{ $nasa->id_user }}">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="nama">
                                    <span class="text-lg font-semibold">Nama<sup><strong class="text-red-700">*</strong></sup></span>
                                </label>
                                <input name="nama" type="text" id="nama" class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $nasa->nama }}">
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="alamat">
                                    <span class="text-lg font-semibold">Alamat<sup><strong class="text-red-700">*</strong></sup></span>
                                </label>
                                <input name="alamat" type="text" id="alamat"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $nasa->alamat }}">
                            </div>
                            <div class="flex flex-col gap-1 w-80">
                                <label for="no_telp">
                                    <span class="text-lg font-semibold">Nomor Telepon<sup><strong class="text-red-700">*</strong></sup></span>
                                </label>
                                <input name="no_telp" type="text" id="no_telp"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $nasa->no_telp }}">
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="nik">
                                    <span class="text-lg font-semibold">Nomor Induk Kependudukan<sup><strong class="text-red-700">*</strong></sup></span>
                                </label>
                                <input name="nik" type="text" id="nik"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $nasa->nik }}">
                            </div>
                            <div class="flex flex-col gap-1 w-80">
                                <label for="jenis_kelamin">
                                    <span class="text-lg font-semibold">Jenis Kelamin<sup><strong class="text-red-700">*</strong></sup></span>
                                </label>
                                <input name="jenis_kelamin" type="text" id="jenis_kelamin"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $nasa->jenis_kelamin }}">
                                </div>
                            </div>
                            <div class="flex flex-row gap-6">
                                <div class="flex flex-col gap-1 w-80">
                                    <label for="nama_ibu">
                                        <span class="text-lg font-semibold">Nama Ibu<sup><strong class="text-red-700">*</strong></sup></span>
                                    </label>
                                    <input name="nama_ibu" type="text" id="nama_ibu"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $nasa->nama_ibu }}">
                                </div>
                                <div class="flex flex-col gap-1 w-80">
                                    <label for="tgl_lahir">
                                        <span class="text-lg font-semibold">Tanggal Lahir<sup><strong class="text-red-700">*</strong></sup></span>
                                    </label>
                                    <input name="tgl_lahir" type="date" id="tgl_lahir" 
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $nasa->tgl_lahir }}">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type='submit' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection