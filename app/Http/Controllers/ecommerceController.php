<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\viewer;
use App\Models\vendor;
use App\Models\customer;
use App\Models\adminregister;
use App\Models\vendorproduct;
use App\Models\feedback;
use App\Models\category;
use App\Models\cart;
use App\Models\payment;




class ecommerceController extends Controller

{
   public function __construct(){
        $this->obj1=new admin;
         $this->obj2=new viewer;
         $this->obj3=new vendor;
         $this->obj4=new customer;
          $this->obj5=new adminregister;
            $this->obj6=new vendorproduct;
              $this->obj7=new feedback;
              $this->obj8=new category;
              $this->obj9=new cart;
                $this->obj10=new payment;
    }
    public function index(){
       return view('index');
      }
      public function products(){
         $data['result']=$this->obj2->userviewprduct('vendorproducts');
       return view('products',$data);
      }
      //  public function addtocart(){
      //  return redirect('/customerlogin');
      // }
       public function home(){
        $data['result']=$this->obj4->userviewprduct('vendorproducts');
        return view('home',$data);
    }
      
       public function about(){

        $data['result']=$this->obj1->aboutview('admins');
        return view('about',$data);
    }
     public function feedback(){
         $data['cate']=category::get();
          $uid=session('sess');
         $data['cart']=$this->obj9->cartcount('carts',$uid);
       return view('feedback',$data);
      }

      public function feedbackaction(Request $req){
         $id=session('sess');
         $username=customer::where('id',$id)->value('username');
        $message=$req->input('message');
        $data=['username'=>$username,'message'=>$message];
        $this->obj7->feedbackdata('feedback',$data);
        return redirect('/feedback');
       
        }

    
       
      public function contact(){
       return view('contact');
      }
      public function contactinsert(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $message=$req->input('message');
        
        $data=['name'=>$name,'email'=>$email,'message'=>$message];
        $this->obj2->contactinsertdata('viewers',$data);
       
        }
      
      public function vendorregister(){
       return view('vendorregister');
      }
      public function vendorinsert(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $password=$req->input('password');
        
        $data=['name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password];
        $this->obj3->vendorinsertdata('vendors',$data);
        
        }
      public function customerregister(){
       return view('customerregister');
      }
      public function customerinsert(Request $req){
        $username=$req->input('username');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $password=$req->input('password');
        $address=$req->input('address');
        $data=['username'=>$username,'email'=>$email,'phone'=>$phone,'password'=>$password,'address'=>$address];
        $this->obj4->customerinsertdata('customers',$data);
        
        }
  
      
      public function vendorlogin(){
       return view('vendorlogin');
      }

     public function vendorloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=$this->obj3->vendorlogindata('vendors',$email,$password);
        
        
           if(isset($data)){
            if($data->status=='Approve'){
            $req->session()->put(array('sess'=>$data->id));
           
                        
            return redirect('/vendorindex');

        }
      else{
            return redirect('/vendorlogin')->with('error','invalid details');
        
      }
    }
}
      


    public function customerlogin(){
       return view('customerlogin');
      }

     public function customerloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=$this->obj4->customerlogindata('customers',$email,$password);
        
        
           if(isset($data)){
           
            $req->session()->put(array('sess'=>$data->id));
            // $id=session('sess');
                        
            return redirect('/customerhome');

        }
      else{
            return redirect('/customerlogin')->with('error','invalid details');
        
      }
  }

       public function customerhome(){

        $data['result']=$this->obj4->customerviewprduct('vendorproducts');
        $data['cate']=category::get();
        $uid=session('sess');
         $data['cart']=$this->obj9->cartcount('carts',$uid);
        return view('customerhome',$data);
    }
  
      public function editprofile(){
        $id=session('sess');

        $data['result']=$this->obj4->edituser('customers',$id);
         $data['cate']=category::get();
          $uid=session('sess');
         $data['cart']=$this->obj9->cartcount('carts',$uid);
       return view('editprofile',$data);
           
    
      
}
public function editprofileaction(Request $req,$id){
      $username=$req->input('username');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $password=$req->input('password');
        $address=$req->input('address');
        
        $data=['username'=>$username,'email'=>$email,'phone'=>$phone,'password'=>$password,'address'=>$address];



      
        $this->obj4->updateedituser('customers',$id,$data);
        
     return redirect('/customerlogin');
}


public function adminlogin(){
       return view('adminlogin');
      }

     public function adminloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=$this->obj5->adminlogindata('adminregister',$email,$password);
        
        
           if(isset($data)){
           
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
                        
            return redirect('/adminindex');

        }
      else{
            return redirect('/adminlogin')->with('error','invalid details');
        
      }
    
      
}
public function vendorindex(){
       return view('vendor.vendorindex');
      }
    
       

       public function updateprofile(){
         $id=session('sess');
        $data['result']=$this->obj3->profileedit('vendors',$id);
        return view('vendor.updateprofile',$data);
    }

 public function vendoreditaction(Request $req,$id){
      $name=$req->input('name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $password=$req->input('password');
        
        $data=['name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password];



      
        $this->obj3->updateprofile('vendors',$id,$data);
        
     return redirect('/updateviewvendors');
}


public function addproduct(){
    $data['category']=$this->obj3->vproduct('categories');
    return view('vendor.addproduct',$data);
}
public function addproductaction(Request $req){
    $category=$req->input('category');
    $pname=$req->input('pname');
    $prize=$req->input('prize');
    $productimage=$req->file('productimage');
        $filename=$productimage->getClientOriginalName();
        $productimage->move(public_path().'\upload',$filename);
    $data=['category'=>$category,'pname'=>$pname,'prize'=>$prize,'productimage'=>$filename];
    $this->obj6->productactn('vendorproducts',$data);
    return redirect('/addproduct');


}
 public function viewvendorproduct(){
        $data['result']=$this->obj3->vendorviewprduct('vendorproducts');
        return view('vendor.viewvendorproduct',$data);
    }

    public function editproduct($id){
        $data['result']=$this->obj3->editprdct('vendorproducts',$id);
        return view('vendor.editproduct',$data);
    }

 public function editproductaction(Request $req,$id){
      $category=$req->input('category');
    $pname=$req->input('pname');
    $prize=$req->input('prize');
    $data=['category'=>$category,'pname'=>$pname,'prize'=>$prize];
        $this->obj3->editprdctactn('vendorproducts',$id,$data);

        
     return redirect('/viewvendorproduct');
}
public function deleteproduct($id){
    $this->obj->deleteprdct('vendorproducts',$id);
    return redirect('/viewvendorproduct');

}
public function selectproduct($id){
    $data['result']=category::join('vendorproducts','vendorproducts.category' ,"=", 'categories.category')->where('categories.id',"=",$id)->select('vendorproducts.id','vendorproducts.category','vendorproducts.status','vendorproducts.pname','vendorproducts.prize','vendorproducts.productimage')->get();
      $uid=session('sess');
    $data['cate']=category::get();
    $data['cart']=$this->obj9->cartcount('carts',$uid);

    return view('selectproduct',$data);
}

public function productdetails($id){
 $uid=session('sess');
     $data['result']=vendorproduct::where('id',$id)->get();
    $data['cate']=category::get();
    $data['cart']=$this->obj9->cartcount('carts',$uid);
    return view('productdetails',$data);
}
     public function cartinsert(Request $req){
         $uid=session('sess');
        $prize=$req->input('prize');
        $quantity=$req->input('quantity');
        $shipping=$req->input('shipping');
        $cod=$req->input('cod');
         $productimage=$req->input('productimage');
        $total=$req->input('total');
        $data=['uid'=>$uid,'prize'=>$prize,'quantity'=>$quantity,'shipping'=>$shipping,'cod'=>$cod,'productimage'=>$productimage,'total'=>$total];
       cart::insert($data);
       return redirect('/viewcart');
        }
public function viewcart(){

$uid=session('sess');
        // $data['result']=$this->obj9->viewcartproduct('carts');
    $data['result']=cart::where('uid',$uid)->get();
        $data['cate']=category::get();
        $data['csum']=$this->obj9->selectsum('carts',$uid);

         $data['cart']=$this->obj9->cartcount('carts',$uid);
         // print_r($data);
         // exit();

         // $data['carte']=cart::where('uid',$uid)->count();
        return view('viewcart',$data);
}
public function totalprize(Request $req,$id){
    
  //$id=$req->input('id');  
 
 $quantity=$req->input('quantity');
  $total=$req->input('total');
 $data=['quantity'=>$quantity,'total'=>$total];
 cart::where('id',$id)->update($data);
}
public function deletecart($id){
    $this->obj9->removecart('carts',$id);
    return redirect('/viewcart');

}
public function displayaddress(){
     $data['cate']=category::get();
     $uid=session('sess');
     $data['cart']=$this->obj9->cartcount('carts',$uid);
     $data['csum']=$this->obj9->selectsum('carts',$uid);
 
     $data['result']=cart::where('uid',$uid)->get();
    
    return view('displayaddress',$data);
}
 public function proceedtopay(Request $req){

        $uid=session('sess');
        $total=$req->input('total');
        //$date=now();
        //echo $date;
        //exit();
        $data=['uid'=>$uid,'total'=>$total];

          //$data['date']=$this->obj10->selectdate('payments',$uid);


         //$data['dte']= payment::whereDate('created_at', Carbon::today())->get();

       
        payment::insert($data);
        cart::where('uid',$uid)->delete();
        return redirect('/payment');
      
      }
        public function payment(){
    $uid=session('sess');
    $dataa['cate']=category::get();
    $dataa['total']=payment::where('uid',$uid)->get();
    
    $dataa['cart']=$this->obj9->cartcount('carts',$uid);
        return view('payment',$dataa);
       }
      public function paymentaction($id)
        {
    $uid=session('sess');
       $data=['status'=>"payment received"];
       payment::where('uid',$uid)->where('id',$id)->update($data);
        return redirect('/customerhome');
          }
           public function vieworders(){
            $uid=session('sess');
              $data['cate']=category::get();
              $data['total']=payment::where('uid',$uid)->get();

        $data['result']=$this->obj10->vieworder('payments');

         $data['cart']=$this->obj9->cartcount('carts',$uid);
        return view('vieworders',$data);
    }

     public function logout(Request $req){
        $req->session()->forget('ses');
        return redirect('/index');
     } 

     public function vendorlogout(Request $req){
        $req->session()->forget('ses');
        return redirect('/vendorlogin');
     }



}
