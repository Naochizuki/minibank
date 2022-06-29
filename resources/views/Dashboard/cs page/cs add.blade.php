@extends('Dashboard.layout.dashboard main')

@section('title', 'Dashboard')

@section('header-vertical-content')
    @include('Dashboard.partials.cs header')
@endsection
@section('content')
    <div class="relative flex items-center justify-center self-auto">
        <div class="continer mx-auto flex flex-col lg:flex-row items-center justify-center pb-40">
            <div class="border border-solid border-slate-200 rounded-lg shadow-md shadow-slate-400 mt-10 p-4">
                <form action="/create" method="POST">
                    @csrf
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="username">
                                <span class="text-lg font-semibold">Username</span>
                            </label>
                            <input name="nama" type="text" id="username" placeholder="Username"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                    </div>
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="email">
                                <span class="text-lg font-semibold">Email</span>
                            </label>
                            <input name="email" type="text" id="email" placeholder="Email"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                        <div class="flex flex-col gap-1 w-80">
                            <label for="Password">
                                <span class="text-lg font-semibold">Password</span>
                            </label>
                            <input name="password" type="password" id="pasword" placeholder="Password" minlength="8"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                    </div>
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="alamat">
                                <span class="text-lg font-semibold">Alamat</span>
                            </label>
                            <input name="alamat" type="text" id="alamat" placeholder="Alamat"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                        <div class="flex flex-col gap-1 w-80">
                            <label for="no_telp">
                                <span class="text-lg font-semibold">Nomor Telepon</span>
                            </label>
                            <input name="no_telp" type="text" id="no_telp" placeholder="Nomor Telepon"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                    </div>
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="nik">
                                <span class="text-lg font-semibold">Nomor Induk Kependudukan</span>
                            </label>
                            <input name="nik" type="text" id="nik" placeholder="Nomor Induk Kependudukan"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                        <div class="flex flex-col gap-1 w-80">
                            <label for="jenis_kelamin">
                                <span class="text-lg font-semibold">Jenis Kelamin</span>
                            </label>
                            <input name="jenis_kelamin" type="text" id="jenis_kelamin" placeholder="Jenis Kelamin"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                    </div>
                    <div class="flex flex-row gap-6">
                        <div class="flex flex-col gap-1 w-80">
                            <label for="nama_ibu">
                                <span class="text-lg font-semibold">Nama Ibu</span>
                            </label>
                            <input name="nama_ibu" type="text" id="nama_ibu" placeholder="Nama Ibu"
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                        <div class="flex flex-col gap-1 w-80">
                            <label for="tgl_lahir">
                                <span class="text-lg font-semibold">Tanggal Lahir</span>
                            </label>
                            <input name="tgl_lahir" type="date" id="tgl_lahir" 
                                class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                        </div>
                    </div>
                    <div class="h-8"></div>
                        <div class="group flex justify-center">
                            <a href=""
                                class="w-full bg-purple-700 text-center rounded-md group-hover:bg-purple-500 transition-all duration-200">
                                <input type="submit"
                                    class="text-white font-bold text-xl p-2 group-hover:font-semibold transition-all duration-200"><i class="fa-solid fa-right-to-bracket"></i>
                            </a>
                        </div>
                </form>
            </div>
        </div>
    </div>

@endsection