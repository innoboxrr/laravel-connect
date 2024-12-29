<?php

namespace Innoboxrr\LaravelConnect\Exports;

use Innoboxrr\LaravelConnect\Models\PlatformConnection;
use Innoboxrr\SearchSurge\Search\Builder;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PlatformConnectionsExports implements FromView
{

    protected $data;

    public function __construct( array $data) 
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view(
            config(
                'innoboxrrlaravelconnect.excel_view', 
                'innoboxrrlaravelconnect::excel.'
            ) . 'platform_connection', 
            [
                'platform_connections' => $this->getQuery(),
                'exportCols' => PlatformConnection::$export_cols
            ]
        );
    }

    public function getQuery()
    {   
        $builder = new Builder();
        return $builder->get(PlatformConnection::class, $this->data);
    }

}