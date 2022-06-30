@extends('Dashboard.layout.main')

@section('title', 'Bank')

@if (Auth::user()->role == 'admin')
    @section('header-vertical-content')
        @include('Dashboard.partials.admin-header')
    @endsection
@elseif (Auth::user()->role == 'cs')
    @section('header-vertical-content')
        @include('Dashboard.partials.cs-header')
    @endsection
@elseif (Auth::user()->role == 'teller')
    @section('header-vertical-content')
        @include('Dashboard.partials.admin-header')
    @endsection
@else
    @section('header-vertical-content')
        @include('Dashboard.partials.nasabah-header')
    @endsection
@endif

@section('content')
    <div class="main-fill-vertical transition-all-500"></div>
        <div class="main-fill-second">
            <div class="main-fill-horizontal"></div>
            <div class="main-container">
                <div class="main-content">
                    <div class="flex flex-col items-center border border-solid border-slate-200 rounded-lg bg-white shadow-md shadow-slate-400 mt-10 p-4">
                        <a href="{{ url('admin/dashboard/nasabah') }}" class="mb-4">
                            <button type='button' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Back
                            </button>
                        </a>
                        <div class="flex flex-row mb-2">
                            <div class="picture-container w-32 h-32">
                                <div class="profile-picture overflow-hidden">
                                    @if (Auth::user()->foto)
                                        <img src="{{ Storage::url(Auth::user()->foto) }}" alt="{{ Auth::user()->nama }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row gap-6 mb-3">
                            <div class="flex flex-col w-24">
                                <label for="role" class="w-full text-center">
                                    <span class="text-lg font-semibold">Role</span>
                                </label>
                                <input name="role" type="text" id="role" class="text-center font-bold h-8 border border-solid border-slate-400 rounded-md focus:outline-none disabled:bg-slate-400 disabled:border-black p-2" disabled value="{{ Auth::user()->role }}">
                            </div>
                        </div>
                        <form action="{{ url('/setting/profile') }}" method="post" enctype="multipart/form-data" class="flex flex-col items-center">
                            @csrf
                            <div class="flex flex-row gap-6">
                                <div class="flex flex-col w-80">
                                    <label for="nama" class="w-full text-center">
                                        <span class="text-lg font-semibold">Nama</span>
                                    </label>
                                    <input name="nama" type="text" id="nama" class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none disabled:bg-slate-400 disabled:border-black p-2" disabled value="{{ Auth::user()->nama }}">
                                </div>
                                <div class="flex flex-col w-80">
                                    <label for="email" class="w-full text-center">
                                        <span class="text-lg font-semibold">Email</span>
                                    </label>
                                    <input name="email" type="text" id="email"
                                        class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            @if (Auth::user()->role == 'nasabah')
                            <div class="flex flex-row gap-6">
                                <div class="flex flex-col w-80">
                                    <label for="no_telp" class="w-full text-center">
                                        <span class="text-lg font-semibold">Nomor Telepon</span>
                                    </label>
                                    <input name="no_telp" type="text" id="no_telp"
                                        class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $nasabah[0]->no_telp }}">
                                </div>
                                <div class="flex flex-col w-80">
                                    <label for="alamat" class="w-full text-center">
                                        <span class="text-lg font-semibold">Alamat</span>
                                    </label>
                                    <textarea name="alamat" id="alamat" class="h-16 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">{{ $nasabah[0]->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="flex flex-row gap-6">
                                <div class="flex flex-col w-80">
                                    <label for="nik" class="w-full text-center">
                                        <span class="text-lg font-semibold">Nomor Induk Kependudukan</span>
                                    </label>
                                    <input name="nik" type="text" id="nik"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none disabled:bg-slate-400 disabled:border-black p-2" disabled value="{{ $nasabah[0]->nik }}">
                                </div>
                                <div class="flex flex-col w-80">
                                    <label for="jenis_kelamin" class="w-full text-center">
                                        <span class="text-lg font-semibold">Jenis Kelamin</span>
                                    </label>
                                    <input name="jenis_kelamin" type="text" id="jenis_kelamin"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none disabled:bg-slate-400 disabled:border-black p-2" disabled value="{{ $nasabah[0]->jenis_kelamin }}">
                                </div>
                            </div>
                            <div class="flex flex-row gap-6">
                                <div class="flex flex-col w-80">
                                    <label for="nama_ibu" class="w-full text-center">
                                        <span class="text-lg font-semibold">Nama Ibu</span>
                                    </label>
                                    <input name="nama_ibu" type="text" id="nama_ibu"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none disabled:bg-slate-400 disabled:border-black p-2" disabled value="{{ $nasabah[0]->nama_ibu }}">
                                </div>
                                <div class="flex flex-col w-80">
                                    <label for="tgl_lahir" class="w-full text-center">
                                        <span class="text-lg font-semibold">Tanggal Lahir</span>
                                    </label>
                                    <input name="tgl_lahir" type="date" id="tgl_lahir" 
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none disabled:bg-slate-400 disabled:border-black p-2" disabled value="{{ $nasabah[0]->tgl_lahir }}">
                                </div>
                            </div>
                            @endif
                            @if (Auth::user()->role == 'nasabah')
                                <input name="id" type="hidden" id="id" value="{{ $nasabah[0]->id }}">
                            @else
                                <input name="id" type="hidden" id="id" value="{{ Auth::user()->id }}">
                            @endif
                            <div class="flex flex-row gap-6">
                                <div class="flex flex-col w-80">
                                    <label for="foto" class="w-full text-center">
                                        <span class="text-lg font-semibold">Foto Profile</span>
                                    </label>
                                    <input name="foto" type="file" id="foto" class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none px-2 py-0.5">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type='submit' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection