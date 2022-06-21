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
                    
                    <div class="bank-data">
                        <form action="" methods="post">
                            <div class="flex flex-col gap-1 w-full">
                                <input type="text" id="nama" name="nama" placeholder="Username"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection