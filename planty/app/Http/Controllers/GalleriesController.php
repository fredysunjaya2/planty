<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleriesController extends Controller
{
    //
    public function readGalleries()
    {
        $plants = Gallery::join('plants', 'galleries.plant_id', '=', 'plants.id')
            ->join('subs_tiers', 'galleries.subs_tier_id', '=', 'subs_tiers.id')
            ->select(
                'galleries.id',
                'plant_name',
                'plant_description',
                'plant_img',
                'tier_name',
                DB::raw('YEAR(archive_date) as archive_year'),
                DB::raw('MONTHNAME(archive_date) as archive_month')
            )
            ->orderBy('archive_date', 'desc')->get();

        // Initialize an empty array to hold the categorized data
        $categorizedData = [];

        // Iterate through the data array
        foreach ($plants as $item) {
            // Extract the year from the archive_date
            $year = $item['archive_year'];

            // If the year key doesn't exist in the categorizedData array, create it
            if (!isset($categorizedData[$year])) {
                $categorizedData[$year] = [];
            }

            // Append the item to the corresponding year array
            $categorizedData[$year][] = $item;
        }

        // return $categorizedData;


        return view('gallery', compact('categorizedData'));
    }
}
