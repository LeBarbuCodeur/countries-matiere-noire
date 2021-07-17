<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Country;

class Countries extends Controller
{
    /**
     * Countries are already fecthed ?
     *
     * @return Boolean
     */
    public static function asAlreadyFetched()
    {
        return sizeof(Country::all());
    }

    /**
     * Fetch countries from the endpoint.
     *
     * @return \Illuminate\Http\Response
     */
    public static function fetch()
    {
        // Get the datas from the endpoint
        $response = Http::get('https://restcountries.eu/rest/v2');

        if ($response->successful()) {
            $countries = $response->object();

            // Update languages for each country
            foreach ($countries as $i => $country) {
                $country->languages = implode(', ', array_column($country->languages, 'name'));

                Country::updateOrCreate(
                    [
                        'code' => strtolower($country->alpha3Code)
                    ], [
                        'name' => ucfirst(trim($country->name)),
                        'region' => ucFirst(trim($country->region)),
                        'subregion' => ucFirst(trim($country->subregion)),
                        'population' => trim($country->population),
                        'capital' => ucFirst(trim($country->capital)),
                        'flag' => trim($country->flag),
                        'languages' => $country->languages
                    ]
                );
            }

            return response([
                'status' => 200,
                'message' => 'Countries upserted successfully',
            ], 200)->header('Content-Type', 'application/json');
        }
        else {
            return response([
                'status' => 500,
                'message' => 'Error while fetching countries. Skipping...',
            ], 500)->header('Content-Type', 'application/json');
        }

    }

    /**
     * Get countries from the database.
     *
     * @return JSON response
     */
    public function get()
    {
        // Get the datas from the endpoint
        $countries = DB::table('countries')->where('region', '=', 'Europe')->get();

        if (sizeof($countries)) {
            // Return the fetched datas
            return response([
                'status' => 200,
                'message' => '',
                'datas' => $countries,
            ], 200)->header('Content-Type', 'application/json');
        }
        else {
            // Return error message
            return response([
                'status' => 500,
                'message' => 'Can\'t fetch countries. Skipping...',
                'datas' => '',
            ], 500)->header('Content-Type', 'application/json');
        }
    }
}
