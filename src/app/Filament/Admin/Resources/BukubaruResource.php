<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BukubaruResource\Pages;
use App\Filament\Admin\Resources\BukubaruResource\RelationManagers;
use App\Models\Bukubaru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;   

class BukubaruResource extends Resource
{
    protected static ?string $model = Bukubaru::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Buku Baru';

    // Ganti nama model di header dan breadcrumb
    protected static ?string $modelLabel = 'Buku Baru';

    // Jika ingin plural dan singular berbeda
    protected static ?string $pluralModelLabel = 'Daftar Buku Baru';
    protected static ?string $slug = 'buku-baru';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('penulis')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('tahun_terbit')
                    ->label('Tahun Terbit')
                    ->options([
                        '2021' => '2021',
                        '2022' => '2022',
                        '2023' => '2023',
                        '2024' => '2024',
                        '2025' => '2025',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('penerbit')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('penulis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_terbit'),
                Tables\Columns\TextColumn::make('penerbit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBukubarus::route('/'),
            'create' => Pages\CreateBukubaru::route('/create'),
            'edit' => Pages\EditBukubaru::route('/{record}/edit'),
        ];
    }
}
