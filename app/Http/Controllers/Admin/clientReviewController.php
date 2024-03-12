<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;

class clientReviewController extends Controller
{
    public function onAllSelect(){
        $result = ClientReview::all();
        return $result;

    }
}
