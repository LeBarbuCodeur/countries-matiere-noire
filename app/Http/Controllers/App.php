<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class App extends Controller
{
    /**
     * Get the homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // Check if datas are in the database
        if (!Countries::asAlreadyFetched())
            Countries::fetch();
        
        return view('app');
    }
}
