<?php

namespace App\Http\Controllers;

use App\Models\SubsCategory;
use App\Models\SubsTier;
use Illuminate\Http\Request;

class SubsCategoriesController extends Controller
{
    // public function productBeginner()
    // {
    //     $pricings = SubsCategory::where('subs_tier_id', '=', '1')
    //         ->select('*')
    //         ->get();
    //     return view('product_beginner', compact('pricings'));
    // }
    // public function productEnthusiast()
    // {
    //     $pricings = SubsCategory::where('subs_tier_id', '=', '2')
    //         ->select('*')
    //         ->get();
    //     return view('product_enthusiast', compact('pricings'));
    // }

    public function productDetail($productType)
    {
        $pricings = SubsCategory::join('subs_tiers', 'subs_categories.subs_tier_id', '=', 'subs_tiers.id')
            ->where("subs_tiers.slug", '=', $productType)->orderBy('months', 'desc')->get();

        return view('product_detail', compact('pricings'));
    }
}
