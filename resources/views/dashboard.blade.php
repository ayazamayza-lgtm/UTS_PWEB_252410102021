@extends('layouts.app')

@section('title', 'Dashboard - Tree Outdoor')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8 space-y-8">
    <!-- Ucapan selamat Datang -->
    <div class="bg-emerald-50 border border-emerald-100 rounded-xl p-6">
        <h1 class="text-3xl font-bold text-emerald-900">Selamat Datang, {{ $username }}!</h1>
        <p class="text-emerald-700 mt-2">Anda berhasil masuk sebagai Admin.</p>
    </div>
    <!-- card status -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between hover:shadow-md transition duration-200">
            <div>
                <p class="text-xs font-semibold tracking-wider text-slate-500 uppercase">Status</p>
                <div class="flex items-center gap-2 mt-2">
                    <span class="text-2xl font-bold text-slate-800">Aktif</span>
                    <span class="inline-flex items-center px-4 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                        Online
                    </span>
                </div>
                <p class="text-xs text-slate-500 mt-2">Admin: <span class="font-medium text-slate-700">{{$username}}</span></p>
            </div>

            <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>
        </div>

        <!-- card total item  -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between hover:shadow-md transition duration-200">
            <div>
                <p class="text-xs font-semibold tracking-wider text-slate-400 uppercase">Total Item</p>
                <p class="text-3xl font-extrabold text-slate-800 mt-1">{{ $totalItem}} <span class="text-lg font-normal text-slate-500">Jenis</span></p>
                <p class="text-xs text-slate-500 mt-2">Siap disewakan & dikelola</p>
            </div>
            <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center shrink-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
            </div>
        </div>

    </div>

    <!-- Akses cepat-->
    <div>
        <h2 class="text-lg font-bold text-slate-800 mb-4 flex items-center gap-2">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
            Akses Cepat
        </h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            
            <!-- Tombol aksi Kelola alat -->
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="group bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm hover:border-emerald-500 hover:shadow-md transition duration-200 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800 group-hover:text-emerald-700 transition duration-200">Kelola Alat</h3>
                        <p class="text-xs text-slate-500">Lihat daftar inventaris</p>
                    </div>
                </div>
                <svg class="w-5 h-5 text-slate-400 group-hover:translate-x-1 group-hover:text-emerald-600 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

            <!-- Tombol aksi: lihat Profil -->
            <a href="{{ route('profile', ['username' => $username]) }}" class="group bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm hover:border-emerald-500 hover:shadow-md transition duration-200 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 rounded-xl bg-slate-100 text-slate-700 flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800 group-hover:text-emerald-700 transition duration-200">Lihat Profil</h3>
                        <p class="text-xs text-slate-500">Pengaturan akun admin</p>
                    </div>
                </div>
                <svg class="w-5 h-5 text-slate-400 group-hover:translate-x-1 group-hover:text-emerald-600 transition duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>

        </div>
    </div>

</div>
@endsection