<?php

namespace App\Http\Livewire;

use Laracasts\Flash\Flash;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\ProductCategory;

class ProductCategoriesTable extends DataTableComponent
{
    protected $model = ProductCategory::class;

    protected $listeners = ['deleteRecord' => 'deleteRecord'];

    public function deleteRecord($id)
    {
        ProductCategory::find($id)->delete();
        Flash::success('Product Category deleted successfully.');
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
            Column::make("Short Description", "short_description")
                ->sortable()
                ->searchable(),
            Column::make("Url", "url")
                ->sortable()
                ->searchable(),
            Column::make("Other", "other")
                ->sortable()
                ->searchable(),
            Column::make("Actions", 'id')
                ->format(
                    fn($value, $row, Column $column) => view('common.livewire-tables.actions', [
                        'showUrl' => route('productCategories.show', $row->id),
                        'editUrl' => route('productCategories.edit', $row->id),
                        'recordId' => $row->id,
                    ])
                )
        ];
    }
}
