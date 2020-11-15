<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
class HomeController extends Controller
{
    public function index()
    {
         $all_published_product=DB::table('tbl_products')
                     ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                     ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
                     ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
                     
                     ->limit(12)
                     ->get();
       $manage_published_product=view('pages.home_content')
               ->with('all_published_product',$all_published_product);
       return view('shop')
               ->with('pages.home_content',$manage_published_product); 
    }
//show products by category    
     public function show_product_by_category($category_id)
  {
     $product_by_category=DB::table('tbl_products')
                     ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                     ->select('tbl_products.*','tbl_category.category_name')
                     ->where('tbl_category.category_id',$category_id)
                     
                     ->limit(18)
                     ->get();
       $manage_product_by_category=view('pages.category_by_products')
               ->with('product_by_category',$product_by_category);
       return view('shop')
               ->with('pages.category_by_products',$manage_product_by_category); 
 
  }
// Show products by barands name
 public function show_product_by_manufacture($manufacture_id)
  {
     $product_by_manufacture=DB::table('tbl_products')
                     ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                     ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
                     ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
                     ->where('tbl_manufacture.manufacture_id',$manufacture_id)
                     
                     ->limit(18)
                     ->get();
       $manage_product_by_manufacture=view('pages.manufacture_by_products')
               ->with('product_by_manufacture',$product_by_manufacture);
       return view('shop')
               ->with('pages.manufacture_by_products',$manage_product_by_manufacture); 
 
  }  
}
