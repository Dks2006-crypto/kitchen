<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Filament\Resources\PostResource\RelationManagers\CategoryPostRelationManager;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $modelLabel = 'Пост';

    protected static ?string $pluralModelLabel = 'Посты';

    protected static ?string $navigationLabel = 'Посты';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()->schema([
                Section::make('Новый пост')->schema([
                    TextInput::make('name')
                        ->required()
                        ->label('Название поста'),
                    Textarea::make('content')
                        ->label('Описание поста')
                        ->maxLength(255)
                        ->required(),
                ])->columns(2)->columnSpanFull(),
                Section::make()->schema([
                    FileUpload::make('image')
                        ->label('Изображение поста')
                        ->image()
                        ->directory('Post')
                        ->required(),
                ])->columnSpanFull(),
        ])->columnSpan(2),
        Group::make()->schema([
            Section::make()->schema([
                Section::make()->schema([
                    Select::make('category_post_id')
                        ->required()
                        ->preload()
                        ->searchable()
                        ->label('Категория поста')
                        ->relationship('post_category', 'name')
                ]),
                Toggle::make('is_active')
                    ->label('Актвный пост')
                    ->helperText('Этот пост будет отображаться на сайте')
                    ->default(true),
                Toggle::make('is_featured')
                    ->label('Популярный пост')
                    ->helperText('Пост будет добавлен в "популярные посты"')
                    ->default(false),
            ]),
        ])->columnSpan(1),
    ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('category_post_id')
                ->label("Категория")
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('name')
                ->searchable(),
            Tables\Columns\IconColumn::make('is_active')
                ->boolean(),
            Tables\Columns\IconColumn::make('is_featured')
                ->boolean(),
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
                Tables\Actions\ViewAction::make(),
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
            CategoryPostRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
