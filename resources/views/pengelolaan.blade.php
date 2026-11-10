@extends('layouts.app')

@section('title', 'Pengelolaan Alat Outdoor')

@section('content')
<div class="space-y-6">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Daftar Inventaris Sewa Alat Outdoor</h1>
            <p class="text-slate-500 text-sm">Admin: <strong>{{ $username }}</strong></p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-slate-50 text-slate-600 text-xs uppercase tracking-wider border-b border-slate-200">
                    <th class="py-3 px-4">No</th>
                    <th class="py-3 px-4">Nama Alat</th>
                    <th class="py-3 px-4">Kategori</th>
                    <th class="py-3 px-4">Sewa / Hari</th>
                    <th class="py-3 px-4">Stok Ready</th>
                    <th class="py-3 px-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm">
                @foreach($products as $index => $product)
                <tr class="hover:bg-slate-50/80 transition">
                    <td class="py-3.5 px-4 font-medium text-slate-500">{{ $index + 1 }}</td>
                    <td class="py-3.5 px-4 font-semibold text-slate-800">{{ $product['nama'] }}</td>
                    <td class="py-3.5 px-4 text-slate-600">{{ $product['kategori'] }}</td>
                    <td class="py-3.5 px-4 font-medium text-slate-700">Rp {{ number_format($product['tarif'], 0, ',', '.') }} / hari</td>
                    <td class="py-3.5 px-4 text-slate-600">{{ $product['stok'] }} unit</td>
                    <td class="py-3.5 px-4">
                        @if($product['status'] === 'Tersedia')
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Tersedia</span>
                        @else
                            <span class="bg-amber-100 text-amber-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Kosong</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
