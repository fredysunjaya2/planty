<?php

namespace App\Http\Controllers;

use App\Models\SubsCategory;
use Illuminate\Http\Request;

class SubsCategoriesController extends Controller
{
    public function productBeginner()
    {
        $pricings = SubsCategory::where('subs_tier_id', '=', '1')
            ->select('*')
            ->get();
        return view('product_beginner', compact('pricings'));
    }
    public function productEnthusiast()
    {
        $pricings = SubsCategory::where('subs_tier_id', '=', '2')
            ->select('*')
            ->get();
        return view('product_enthusiast', compact('pricings'));
    }
}
