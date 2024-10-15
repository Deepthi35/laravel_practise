<?php

namespace App\Http\Livewire;

use Laracasts\Flash\Flash;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Product;

class ProductsTable extends DataTableComponent
{
    protected $model = Product::class;

    protected $listeners = ['deleteRecord' => 'deleteRecord'];

    public function deleteRecord($id)
    {
        Product::find($id)->delete();
        Flash::success('Product deleted successfully.');
        $this->emit('refreshDatatable');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Image Url", "image_url")
                ->sortable()
                ->searchable(),
            Column::make("Image", "image")
                ->sortable()
                ->searchable(),
            Column::make("Img Alt Text", "img_alt_text")
                ->sortable()
                ->searchable(),
            Column::make("Url", "url")
                ->sortable()
                ->searchable(),
            Column::make("Price", "price")
                ->sortable()
                ->searchable(),
            Column::make("Short Description", "short_description")
                ->sortable()
                ->searchable(),
            Column::make("Long Description", "long_description")
                ->sortable()
                ->searchable(),
            Column::make("Actions", 'id')
                ->format(
                    fn($value, $row, Column $column) => view('common.livewire-tables.actions', [
                        'showUrl' => route('products.show', $row->id),
                        'editUrl' => route('products.edit', $row->id),
                        'recordId' => $row->id,
                    ])
                )
        ];
    }
}
