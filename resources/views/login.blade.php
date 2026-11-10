@extends('layouts.app')

@section('title', 'Login - Tree Outdoor')

@section('content')
<div class="min-h-[70vh] flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-green-100 rounded-xl shadow-md p-8 border border-slate-100">
        <!-- Judul card login -->
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-slate-800">Login Admin</h2>
        </div>
        <!-- Form pengisian username dan password -->
        <form action="{{ route('login_proses') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-slate-700 mb-1">Username </label>
                <input type="text" id="username" name="username" required placeholder="Masukkan Username"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required placeholder="••••••••"
                class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none transition">
            </div>
            <!-- tombol submit -->
            <div class="text-center">
                <button type="submit" 
                class="px-12 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg shadow transition duration-150">
                Masuk
                </button>
            </div>
        </form>

    </div>
</div>
@endsection