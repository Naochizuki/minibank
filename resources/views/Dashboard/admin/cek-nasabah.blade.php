@extends('Dashboard.layout.main')

@section('title', 'View Nasabah')

@section('header-vertical-content')
    @include('Dashboard.partials.admin-header')
@endsection

@section('content')
    <div class="main-fill-vertical transition-all-500"></div>
    <div class="main-fill-second">
        <div class="main-fill-horizontal"></div>
        <div class="main-container">
            <div class="main-content">
                @for ($i = 0; $i < $nasabah->count(); $i++)
                <div class="flex flex-col items-center border border-solid border-slate-200 rounded-lg bg-white shadow-md shadow-slate-400 mt-10 p-4">
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="nama">
                                <span class="text-lg font-semibold">Nama</span>
                            </label>
                            <input name="nama" type="text" id="nama" class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" disabled value="{{ $nasabah[$i]->nama }}">
                        </div>
                        <div class="flex flex-col gap-1 w-80">
                            <label for="no_telp">
                                <span class="text-lg font-semibold">Nomor Telepon</span>
                            </label>
                            <input name="no_telp" type="text" id="no_telp"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" disabled value="{{ $nasabah[$i]->no_telp }}">
                        </div>
                    </div>
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="email">
                                <span class="text-lg font-semibold">Email</span>
                            </label>
                            <input name="email" type="text" id="email"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" disabled value="{{ $users[$i]->email }}">
                        </div>
                        <div class="flex flex-col gap-1 w-80">
                            <label for="alamat">
                                <span class="text-lg font-semibold">Alamat</span>
                            </label>
                            <textarea name="alamat" id="alamat" class="h-16 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" disabled>{{ $nasabah[$i]->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="nik">
                                <span class="text-lg font-semibold">Nomor Induk Kependudukan</span>
                            </label>
                            <input name="nik" type="text" id="nik"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" disabled value="{{ $nasabah[$i]->nik }}">
                        </div>
                        <div class="flex flex-col gap-1 w-80">
                            <label for="jenis_kelamin">
                                <span class="text-lg font-semibold">Jenis Kelamin</span>
                            </label>
                            <input name="jenis_kelamin" type="text" id="jenis_kelamin"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" disabled value="{{ $nasabah[$i]->jenis_kelamin }}">
                        </div>
                    </div>
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="nama_ibu">
                                <span class="text-lg font-semibold">Nama Ibu</span>
                            </label>
                            <input name="nama_ibu" type="text" id="nama_ibu"
                            class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" disabled value="{{ $nasabah[$i]->nama_ibu }}">
                        </div>
                        <div class="flex flex-col gap-1 w-80">
                            <label for="tgl_lahir">
                                <span class="text-lg font-semibold">Tanggal Lahir</span>
                            </label>
                            <input name="tgl_lahir" type="date" id="tgl_lahir" 
                            class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" disabled value="{{ $nasabah[$i]->tgl_lahir }}">
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ url('admin/dashboard/nasabah') }}">
                            <button type='button' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Back
                            </button>
                        </a>
                        <a href="{{ url('admin/dashboard/nasabah/delete', $id=$nasabah[$i]->id) }}">
                            <button type='button' class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </a>
                        </a>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    @endsection