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
                <div class="border border-solid border-slate-200 rounded-lg bg-white shadow-md shadow-slate-400 mt-10 p-4">
                    <form action="{{ url('teller/dashboard/transaksi/setor') }}" method="POST" class="flex flex-col items-center">
                        @csrf
                        <div class="flex flex-row gap-6">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="id_rekening">
                                    <span class="text-lg font-semibold">Nomor Rekening<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <select name="id_rekening" id="id_rekening" class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none px-2" required>
                                    @foreach ($rekenings as $rekening)
                                        <option value="{{ $rekening->id }}">{{ $rekening->no_rekening }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-row gap-6 mt-4">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="saldo">
                                    <span class="text-lg font-semibold mr-1">Jumlah penarikan<sup><strong class="text-red-500">*</strong></sup></span>
                                </label>
                                <input name="saldo" type="number" id="saldo" placeholder="Saldo"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2 {{ $errors->has('saldo') ? "invalid:border-red-500" : "" }}" required value="500000">
                                    @if ($errors->has('saldo'))
                                      <div class="text-red-500 text-xs" role="alert">
                                         <strong>{{$errors->first('saldo')}}</strong>
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