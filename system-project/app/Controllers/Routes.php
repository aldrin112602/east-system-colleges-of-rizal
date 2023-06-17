<?php

namespace App\Controllers;

class Routes extends BaseController
 {
    
    public function index()
 {
        return view( 'Components/Headers' ) .
        view( 'index' ) .
        view( 'Components/Footers' );
    }
}