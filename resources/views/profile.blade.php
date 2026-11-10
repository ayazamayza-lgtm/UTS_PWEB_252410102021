@extends('layouts.app')

@section('title', 'Profil Admin')

@section('content')
<!-- judul profile -->
<div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md border border-slate-200 p-6 space-y-6">
    <div class="border-b border-slate-100 pb-4">
        <h1 class="text-2xl font-bold text-slate-900">Profil Admin</h1>
        <p class="text-slate-500 text-sm">Informasi akun yang sedang aktif.</p>
    </div>
   
    <div class="space-y-4">
         <!-- profile username -->
        <div class="flex justify-between py-2 border-b border-stone-200">
            <span class="text-slate-500 text-sm">Username</span>
            <span class="font-semibold text-slate-800 text-sm">{{ $profile['username'] }}</span>
        </div>
        <!-- profile peran(role) -->
        <div class="flex justify-between py-2 border-b border-stone-200">
            <span class="text-slate-500 text-sm">Peran Sistem</span>
            <span class="font-semibold text-slate-800 text-sm">{{ $profile['role'] }}</span>
        </div>
        <!-- profile tanggal terdaftar -->
        <div class="flex justify-between py-2 border-b border-stone-200">
            <span class="text-slate-500 text-sm">Tanggal Terdaftar</span>
            <span class="font-semibold text-slate-800 text-sm">{{ $profile['terdaftar'] }}</span>
        </div>
    </div>
</div>
@endsection
