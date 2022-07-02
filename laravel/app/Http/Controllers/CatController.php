<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Cat;
use App\Models\Product;
use App\Models\Subcat;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class CatController
{
    public function postDeleteCat()
    {
        $cat = Cat::find(Request::input('id'));
        $cat->delete();
        return 1;
    }
    public function postDeleteSubcat()
    {
        $subcat = Subcat::find(Request::input('id'));
        $subcat->delete();
        return 1;
    }
    public function getEditCat($id)
    {
        $cat = Cat::find($id);
        return view('edit-cat',['Cat'=>$cat]);
    }
    public function getEditSubcat($id)
    {
        $subcat = Subcat::find($id);
        $cat = Cat::all();
        return view('edit-subcat',['Subcat'=>$subcat , 'Cat'=>$cat]);
    }
    public function postEditCat($id)
    {
        $cat = Cat::find($id);
        $cat->name = Request::input('name');
        $cat->save();
        return redirect(url('/panel/cat'));
    }
    public function postEditSubcat($id)
    {
        $subcat = Subcat::find($id);
        $subcat->name = Request::input('name');
        $subcat->cat_id = Request::input('cat');
        $subcat->save();
        return redirect(url('/panel/subcat'));
    }
    public function getCats()
    {
        $cat = Cat::where('name','like','')->paginate(5);
        return view('cat',['Cat'=>$cat]);
    }
    public function getSubcats()
    {
        $subcat = Subcat::paginate(5);
        return view('subcat',['Subcat'=>$subcat]);
    }
    public function getNewCat()
    {
        $user = Auth::user();
        if($user->Privilege()->find(2)!= null)
        {
            return view('new-cat');
        }
        else{
            return redirect(url('/panel'));
        }
    }
    public function postNewCat()
    {
        $user = Auth::user();
        if($user->Privilege()->find(2)!= null)
        {
            $cat = new Cat();
            $cat->name = Request::input('name');
            $cat->save();
            return 1;
        }
        else{
            return 0;
        }
    }
    public function getNewSubcat()
    {
        $user = Auth::user();
        if($user->Privilege()->find(2)!= null)
        {
            $cat = Cat::all();
            return view('new-subcat',['Cat'=>$cat]);
        }
        else{
            return redirect(url('/panel'));
        }
    }
    public function postNewSubcat()
    {
        $user = Auth::user();
        if($user->Privilege()->find(2)!= null)
        {
            $subcat = new Subcat();
            $subcat->name = Request::input('name');
            $subcat->cat_id = Request::input('cat');
            $subcat->save();
            return 1;
        }
        else{
            return 0;
        }
    }
    public function getCat($id)
    {
       $sub = Cat::find($id)->Subcat()->get();
        $product = null;
        foreach($sub as $s)
        {
            $v = $s->Product()->get();
            $product = $v->merge($v);
        }
        $cat = Cat::all();
        return view('cat-home',['Product'=>$product,'Cat'=>$cat]);
    }
    public function getSubcat($id)
    {
        $product = Product::where('subcat_id','=',$id)->get();
        $cat = Cat::all();
        return view('home',['Product'=>$product,'Cat'=>$cat]);
    }
}