@extends("layout.main")

@section('title', 'login')

@section('content')
    <div class="relative flex items-center min-h-screen">
        <div
            class="continer mx-auto flex flex-col lg:flex-row items-center justify-center pb-40">
            <div class="text-center my-4 lg:my-0 lg:mr-24">
                <h1 class="text-black text-5xl lg:text-6xl dark:text-white font-bold">MINIBANK</h1>
                <h3 class="text-black text-3xl lg:text-4xl dark:text-white font-semibold">{{ $config[0]->code_value }}</h3>
            </div>
            <div
                class="border border-solid border-slate-200 rounded-lg shadow-md shadow-slate-400 mt-10 p-4">
                <form action="{{ route('actionlogin') }}" method="POST" class="flex flex-col gap-6">
                    @csrf
                    <div class="flex flex-col gap-1 w-80">
                        <label for="username">
                            <span class="text-lg font-semibold">Email</span>
                        </label>
                        <input name="email" type="email" id="username" placeholder="Email"
                            class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2">
                    </div>
                    <div class="flex flex-col gap-1 w-180">
                        <label for="Password">
                            <span class="text-lg font-semibold">Password</span>
                        </label>
                        <input name="password" type="password" id="pasword" placeholder="Password" minlength="8"
                            class="h-8 border border-solid border-slate-400 rounded-md text-sm focus:outline-none p-2" required="">
                        <a href=""
                            class="text-sm text-right text-purple-700 underline underline-offset-2 hover:text-purple-500 transition-all duration-200">Lupa
                            Password?</a>
                    </div>
                    <div class="group flex justify-center">
                        <div
                            class="w-full bg-purple-700 text-center rounded-md group-hover:bg-purple-500 transition-all duration-200">
                            <button type="submit" class="text-white font-bold text-xl p-2 group-hover:font-semibold transition-all duration-200"><i class="fa-solid fa-right-to-bracket"></i>Log in</button>
                    </div>
                    </div>
                    <a href="{{ url('/register') }}" class="text-lg text-center text-purple-700 underline underline-offset-2 hover:text-purple-500 transition-all duration-200">Sign Up</a>
                </form>
            </div>
        </div>
    </div>

@endsection