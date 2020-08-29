<?php

namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewPageController extends Controller
{
    //
    public function index(){

        $BufferPosting = DB::table('buffer_postings')
        ->select(DB::raw('social_post_groups.* , social_post_groups.name as group_name, social_post_groups.type as group_type,social_accounts.name as account_name '))
        
        ->join('social_post_groups', 'social_post_groups.id', '=', 'buffer_postings.group_id')
        ->join('social_accounts', 'social_accounts.id', '=', 'buffer_postings.account_id')
        
        
        ->paginate(10);
        $data = array(
            'BufferPosting'=>$BufferPosting,
        );
        return view('pages/new_page', $data);

        //return view('flight.index', ['flights' => $flights]);
    }
}
