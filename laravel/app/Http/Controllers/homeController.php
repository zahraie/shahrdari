<?php
namespace App\Http\Controllers;
use App\Models\Cat;
use App\Models\Product;
use App\Models\Subcat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Mockery\CountValidator\Exception;
use App\Management;
use App\History;


class homeController
{
    public function getHome()
    {
        $product = Product::paginate(5);
        $cat = Cat::all();
        return view('home',['Product'=>$product,'Cat'=>$cat]);
    }
//-------------------------------------------------------------------------------

    //------------------------------------------------------------------------
    public function getManagement()
    {
        return view('management');
    }
    //--------------------------------------------------------------------------
    public function getHistory()
    {
        return view('history');
    }
    public function getRule()
    {
        return view('rule');
    }
    public function getChart()
    {
        return view('chart');
    }
    public function getWelfare()
    {
        return view('welfare');
    }
    public function getOrganization()
    {
        return view('organization');
    }
    public function getDocumentation()
    {
        return view('documentation');
    }
//--------------------------------------
    public function getAbout()
    {
        return view('about');
    }
    public function getPublicity()
    {
        return view('publicity');
    }
    public function getGuide()
    {
        return view('guide');
    }
    //-------------------------------------------
    public function getCouncil()
    {
        return view('council');
    }
    public function getProtection()
    {
        return view('protection');
    }
    public function getLaw()
    {
        return view('law');
    }
    public function getInspect()
    {
        return view('inspect');
    }
    public function getCommunication()
    {
        return view('communication');
    }
    //------------------------------------------
    public function postSearch()
    {
        $search_name = Request::input('search-name');
        $product = Product::where('title','LIKE','%'.$search_name.'%')->orwhere('description','LIKE','%'.$search_name.'%')->paginate(5);
        $cat = Cat::all();
        return view('search',['Product'=>$product,'Cat'=>$cat,'Search'=>$search_name]);
    }
}