@extends('Dashboard.layout.main')

@section('title', 'Mutasi')

@section('header-vertical-content')
    @include('Dashboard.partials.teller-header')
@endsection

@section('content')
    <div class="main-fill-vertical transition-all-500"></div>
    <div class="main-fill-second">
        <div class="main-fill-horizontal"></div>
        <div class="main-container">
            <div class="main-content">
                <div class="bank-information-container">
                    <div class="bank-data">
                        <div class="table-data">
                            <div class="table-header">
                                <div class="table-tr">
                                    <div class="table-td">No.</div>
                                    <div class="table-td">Pemilik Rekening</div>
                                    <div class="table-td">Nomor Rekening</div>
                                    <div class="table-td">Aksi</div>
                                </div>
                            </div>
                            <div class="table-tr-group">
                                @foreach ($rekenings as $rekening)
                                <div class="table-tr">
                                    <div class="table-td">{{ $loop->iteration }}</div>
                                    <div class="table-td">{{ $rekening->nama }}</div>
                                    <div class="table-td">{{ $rekening->no_rekening }}</div>
                                    <div class="table-td-bank flex justify-center">
                                        <a href="{{ url('teller/dashboard/mutasi', $no_rek=$rekening->no_rekening) }}">    
                                            <button data-toggle="modal" data-target="#editModal{{$rekening->no_rekening}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                View
                                            </button>
                                        </a>                
                                    </div>
                                </div>                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection