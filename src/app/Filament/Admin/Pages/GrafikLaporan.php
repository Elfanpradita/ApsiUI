<?php

namespace App\Filament\Admin\Pages;

use App\Models\Bukubaru;
use Filament\Pages\Page;
use Illuminate\Support\Collection;

class GrafikLaporan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static string $view = 'filament.admin.pages.grafik-laporan';
    protected static ?string $title = 'Grafik Buku Baru';
    protected static ?string $navigationGroup = 'Laporan';

    public function getData(): Collection
    {
        return Bukubaru::selectRaw('tahun_terbit, COUNT(*) as total')
            ->groupBy('tahun_terbit')
            ->orderBy('tahun_terbit')
            ->get();
    }
}
