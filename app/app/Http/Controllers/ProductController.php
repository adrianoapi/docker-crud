<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('approved', function($row){
                         if($row->approved){
                            return '<span class="badge badge-primary">Yes</span>';
                         }else{
                            return '<span class="badge badge-danger">No</span>';
                         }
                    })
                    ->filter(function ($instance) use ($request) {
                        if ($request->get('approved') == '0' || $request->get('approved') == '1') {
                            $instance->where('approved', $request->get('approved'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('title', 'iLIKE', "%$search%")
                                ->orWhere('amount', 'iLIKE', "%$search%");
                            });
                        }
                    })
                    ->rawColumns(['approved'])
                    ->make(true);
        }

        return view('products');
    }
}
