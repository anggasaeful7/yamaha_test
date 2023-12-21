<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Forms\Components\TextInput::make('nama')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('harga')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('tipe')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('thumbnail')
                        ->required()
                        ->image()
                        ->disk('public'),
                    Forms\Components\FileUpload::make('gambar')
                        ->required()
                        ->image()
                        ->disk('public'),
                    Forms\Components\FileUpload::make('gambar2')
                        ->required()
                        ->image()
                        ->disk('public'),
                    Forms\Components\FileUpload::make('gambar3')
                        ->required()
                        ->image()
                        ->disk('public'),
                    Forms\Components\TextInput::make('tipe_mesin')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('jumlah_silinder')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('diameter')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('perbandingan_kompresi')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('daya_maximum')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('torsi_maximum')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('starter')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('sistem_pelumasan')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('kapasitas_oli_mesin')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('sistem_bahan_bakar')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('volume_silinder')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('tipe_kopling')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('pola_transmisi')
                        ->required()
                        ->maxLength(255),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipe')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(
                        function (Collection $records) {
                            foreach ($records as $key => $value) {
                                if ($value->thumbnail) {
                                    Storage::disk('public')->delete($value->thumbnail);
                                }
                            }
                        }
                    ),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
