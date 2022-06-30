@extends('Dashboard.layout.main')

@section('title', 'Tambah Nasabah')

@section('header-vertical-content')
    @include('Dashboard.partials.cs-header')
@endsection
@section('content')
<div class="main-fill-vertical transition-all-500"></div>
    <div class="main-fill-second">
        <div class="main-fill-horizontal"></div>
        <div class="main-container">
            <div class="main-content">
                <div class="border border-solid border-slate-200 rounded-lg bg-white shadow-md shadow-slate-400 mt-10 p-4">
                    <form action="{{ url('cs/dashboard/tambah/nasabah') }}" method="POST" class="flex flex-col items-center">
                        @csrf
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="name">
                                    <span class="text-lg font-semibold">Nama<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="nama" type="text" id="name" placeholder="Nama"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('nama') ? "invalid:border-red-500" : "" }}" required>
                                    @if ($errors->has('nama'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('nama')}}</strong>
                                      </div>
                                    @endif
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="email">
                                    <span class="text-lg font-semibold">Email<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="email" type="text" id="email" placeholder="Email"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('email') ? "invalid:border-red-500" : "" }}" required>
                                    @if ($errors->has('email'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('email')}}</strong>
                                      </div>
                                    @endif
                            </div>
                            <div class="flex flex-col gap-1 w-80">
                                <label for="Password">
                                    <span class="text-lg font-semibold">Password<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="password" type="password" id="pasword" placeholder="Password" minlength="8"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('password') ? "invalid:border-red-500" : "" }}" required>
                                    @if ($errors->has('password'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('password')}}</strong>
                                      </div>
                                    @endif
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="alamat">
                                    <span class="text-lg font-semibold">Alamat<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="alamat" type="text" id="alamat" placeholder="Alamat"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('alamat') ? "invalid:border-red-500" : "" }}" required>
                                    @if ($errors->has('alamat'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('alamat')}}</strong>
                                      </div>
                                    @endif
                            </div>
                            <div class="flex flex-col gap-1 w-80">
                                <label for="no_telp">
                                    <span class="text-lg font-semibold">Nomor Telepon<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="no_telp" type="text" id="no_telp" placeholder="Nomor Telepon"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('no_telp') ? "invalid:border-red-500" : "" }}" required>
                                    @if ($errors->has('no_telp'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('no_telp')}}</strong>
                                      </div>
                                    @endif
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="nik">
                                    <span class="text-lg font-semibold">Nomor Induk Kependudukan<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="nik" type="text" id="nik" placeholder="Nomor Induk Kependudukan"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('nik') ? "invalid:border-red-500" : "" }}" required>
                                    @if ($errors->has('nik'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('nik')}}</strong>
                                      </div>
                                    @endif
                            </div>
                            <div class="flex flex-col gap-1 w-80">
                                <label for="jenis_kelamin">
                                    <span class="text-lg font-semibold">Jenis Kelamin<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none px-2 {{ $errors->has('jenis_kelamin') ? "invalid:border-red-500" : "" }}" required>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                    @if ($errors->has('jenis_kelamin'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('jenis_kelamin')}}</strong>
                                      </div>
                                    @endif
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="nama_ibu">
                                    <span class="text-lg font-semibold">Nama Ibu<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="nama_ibu" type="text" id="nama_ibu" placeholder="Nama Ibu"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('nama_ibu') ? "invalid:border-red-500" : "" }}" required>
                                    @if ($errors->has('nama_ibu'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('nama_ibu')}}</strong>
                                      </div>
                                    @endif
                            </div>
                            <div class="flex flex-col gap-1 w-80">
                                <label for="tgl_lahir">
                                    <span class="text-lg font-semibold">Tanggal Lahir<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="tgl_lahir" type="date" id="tgl_lahir" 
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('tgl_lahir') ? "invalid:border-red-500" : "" }}" required>
                                    @if ($errors->has('tgl_lahir'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('tgl_lahir')}}</strong>
                                      </div>
                                    @endif
                            </div>
                        </div>
                        <div class="h-8"></div>
                            <div class="group flex justify-center">
                                <a href=""
                                    class="w-full h-10 bg-purple-700 text-center rounded-md group-hover:bg-purple-500 transition-all duration-200">
                                    <button type="submit" class="text-white font-bold text-xl p-2 group-hover:font-semibold transition-all duration-200">Tambah</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection