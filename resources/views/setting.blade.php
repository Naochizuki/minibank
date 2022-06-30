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
                    <div class="bank-information-container items-center">
                        <div class="total-money-name">
                            <span class="title-total-money">Setting</span>
                        </div>
                        <div class="setting-nav gap-3">
                            <a href="{{ url('/setting/profile') }}" class="no-underline">
                                <button class="btn-configuration">
                                    <div class="btn-configuration-icon">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <span class="btn-name">Edit Profile</span>
                                </button>
                            </a>
                            <a href="{{ url('setting/password') }}" class="no-underline">
                                <button class="btn-configuration">
                                    <div class="btn-configuration-icon">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </div>
                                    <span class="btn-name">Ganti Password</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection