<?php
namespace App\Http\Controllers;
use App\Models\Cat;
use App\Models\Code;
use App\Models\Comment;
use App\Models\Discount;
use App\Models\Product;
use App\Models\Subcat;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Mockery\CountValidator\Exception;

class ProductController
{
    public function getEditProduct($id)
    {
        $product = Product::find($id);
        $subcat = Subcat::all();
        return view('edit-product',['Product'=>$product , 'Subcat'=>$subcat]);
    }
    public function postEditProduct($id)
    {
        $product = Product::find($id);
        $product->title = Request::input('title');
        $product->price = Request::input('price');
        $product->description = Request::input('content');
        $product->subcat_id = Request::input('subcat');
        $product->save();
        return redirect(url('/panel/product'));
    }
    public function postDeleteProduct()
    {
        $product = Product::find(Request::input('id'));
        $product->delete();
        return 1;
    }
    public function getProducts()
    {
        $product = Product::paginate(5);
        return view('products',['Product'=>$product]);
    }
    //---------------------------------------------
    public function getNewProduct()
    {
        $user = Auth::user();
        if($user->Privilege()->find(4)!= null)
        {
            $Subcat =Subcat::all();
            return view('new-product',['Subcat'=>$Subcat]);
        }
        else{
            return redirect(url('/panel'));
        }
    }
    public function postNewProduct()
    {
        $user = Auth::user();
        if($user->Privilege()->find(4)!= null)
        {
            try{
                $product = new Product();
                $product->title = Request::input('title');
                $product->price = Request::input('price');
                $product->description = Request::input('content');
                $product->subcat_id = Request::input('subcat');
                $product->save();
                return 1 ;
            }
            catch(Exception $e)
            {
                return 0 ;
            }
        }
        else{
            return redirect(url('/panel'));
        }
    }


    //------------------------------------------------------
    public function getProduct($id)
    {
        $product = Product::find($id);
        $cat = Cat::all();
        return view('product',['Product'=>$product,'Cat'=>$cat,'Comment'=>$product->Comment()->where('status','=',1)->get()]);
    }
    public function postBuy()
    {
        $code = Request::input('code');
        $price = Request::input('price');
        if($code == "")
        {
            return redirect(url('/request/'.$price));
        }
        $cod = Code::where('code','=',$code)->get();
        $p = 0;
        foreach ($cod as $c)
        {
            $p = $c->price;
            $price2 = $c->price2;
        }
        if($price >= $price2)
        {
            $price = $price-$p;
        }
        return redirect(url('/request/'.$price));
    }

    public function getCodes()
    {
        return view('code');
    }
    public function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 32; $i++) {
            $randstring = $randstring.$characters[rand(0,61)];
        }
        return $randstring;
    }

    public function postNewComment()
    {

        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->product_id = Request::input('id');
        $comment->content = Request::input('comment');
        $comment->status = 0;
        $comment->save();
        return 1 ;
    }

    public function postAddCodes()
    {
        $num = Request::input('users');
        $price = Request::input('price');
        $price2 = Request::input('price2');
        $users = User::orderByRaw('RAND()')->take($num)->get();
        foreach($users as $user)
        {
            $rand =null;
            $rand =$this->RandomString();
            mail($user->email,'?? ?????','?? ????? ??? ???? ???? ?? ???? ??<br>'.$rand.
                '????? ?????'.$price.'<br>'.'<br>???? ???? ??? ?????'.$price2);
            $code = new Code();
            $code->code= $rand;
            $code->price = $price;
            $code->price2 = $price2;
            $code->save();
        }
        return 1;
    }
    public function postAddBasket()
    {
        $stack = session('ids');
        array_push($stack, Request::input('id'));
        session(['ids'=>$stack]);
        return 1;
    }
    public function postAddress()
    {
        session(['address'=>Request::input('a')]);
        return 1;
    }
    public function getSale($price)
    {
        try {
            $gateway = \Gateway::Zarinpal();
            $gateway->setCallback(url('/callback'));
            $gateway->price($price)->ready();
            $refId =  $gateway->refId();
            $transID = $gateway->transactionId();

            // Your code here

            return $gateway->redirect();

        } catch (Exception $e) {

            echo $e->getMessage();
        }
    }
}