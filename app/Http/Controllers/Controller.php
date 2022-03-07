<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function index()
    // {
    //     $category = Category::first();

    //     $items = $category->items;

    //     $itemQueryBuilder = $category->items()->where('id','>',1);

    //     $recentUpdateItems = Item::whereHas('categories',function($q){
    //         return $q->recentUpdated();
    //     })
    //         ->get();

    //     dd($items,$itemQueryBuilder,$recentUpdateItems);

    //     return 'End turn';
    // }
}
