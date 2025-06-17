<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;
use App\Models\Bukubaru;

class TabelLaporan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-table-cells';
    protected static ?string $navigationGroup = 'Laporan';
    protected static ?string $title = 'Tabel Buku Baru';
    protected static ?string $navigationLabel = 'Tabel Buku Baru';
    protected static ?string $slug = 'tabel-laporan'; // slug = route
    protected static string $view = 'filament.admin.pages.tabel-laporan';

    public $bukuBaru;

    public function mount()
    {
        $this->bukuBaru = Bukubaru::all();
    }
}
