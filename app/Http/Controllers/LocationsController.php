<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class LocationsController extends Controller
{
    public function index()
    {
        return view('master');
    }

    public function show()
    {
        //retrieve data
        $From = request('origin');
        $To = request('destination');

        //Append to request web service from Places API
        $myURL = 'https://maps.googleapis.com/maps/api/distancematrix/json?';

        //pass in parameters to request service
        $options = array(
            "units"=>"imperial",
            "origins"=>$From,
            "destinations"=>$To,
            "key"=>"AIzaSyB-Ud_bq10hmcdcoHAWBQYlGELa3l44pXI");

        $myURL .= http_build_query($options,'','&');

        //Receive JSON output
        $results = file_get_contents($myURL);
        return Response::json($results);
    }
}
