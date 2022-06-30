@extends('Dashboard.layout.main')

@section('title', 'Edit Config')

@section('header-vertical-content')
    @include('Dashboard.partials.admin-header')
@endsection

@section('content')
    <div class="main-fill-vertical transition-all-500"></div>
    <div class="main-fill-second">
        <div class="main-fill-horizontal"></div>
        <div class="main-container">
            <div class="main-content">
                <div class="flex flex-col items-center border border-solid border-slate-200 rounded-lg bg-white shadow-md shadow-slate-400 mt-10 p-4">
                    <a href="{{ url('admin/dashboard/bank') }}">
                        <button type='button' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Back
                        </button>
                    </a>
                    <form action="{{ url('admin/dashboard/bank/update') }}" enctype="multipart/form-data" method="post" class="mt-4">
                        @csrf
                        @foreach ($configs as $config)
                        <div class="flex flex-row gap-6 mb-4">
                            <input name="{{ 'id'.$config->id }}" type="hidden" id="{{ 'id'.$config->id }}" class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $config->id }}">
                            <div class="flex flex-col gap-1 w-80">
                                <label for="{{ 'code'.$config->id }}">
                                    <span class="text-lg font-semibold">Code Informasi</span>
                                </label>
                                <input name="{{ 'code'.$config->id }}" type="text" id="{{ 'code'.$config->id }}" class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $config->code }}">
                            </div>
                            <div class="flex flex-col gap-1 w-80">
                                <label for="{{ 'code_value'.$config->id }}">
                                    <span class="text-lg font-semibold">Detail Informasi</span>
                                </label>
                                <input name="{{ 'code_value'.$config->id }}" type="text" id="{{ 'code_value'.$config->id }}"
                                    class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" value="{{ $config->code_value }}">
                            </div>
                        </div>
                        @endforeach
                        <div class="mt-4 flex justify-center">
                            <button type='submit' class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection