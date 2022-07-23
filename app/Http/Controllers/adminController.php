<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\category;

class adminController extends Controller
{
   public function __construct(){
        $this->obj=new admin;
        $this->obj8=new category;
    }
    public function adminindex(){
       return view('admin.adminindex');
      }
      public function addabout(){
       return view('admin.addabout');
      }
      public function addaboutinsert(Request $req){
        $addabout=$req->input('addabout');
        
        $data=['addabout'=>$addabout];
        $this->obj->insertdata('admins',$data);
        return redirect('/viewabout');
        }
        public function viewabout(){
        $data['result']=$this->obj->adminview('admins');
        return view('admin.viewabout',$data);
    }
    public function editviewabout($id){
        $data['result']=$this->obj->aboutedit('admins',$id);
        return view('admin.editviewabout',$data);
    }

 public function viewabouteditaction(Request $req,$id){
      $addabout=$req->input('addabout');
        
        $data=['addabout'=>$addabout];
        $this->obj->editaboutdata('admins',$id,$data);
        
     return redirect('/viewabout');
}
public function deleteviewabout($id){
    $this->obj->deleteabout('admins',$id);
    return redirect('/viewabout');

}
   public function viewvendors(){
    $data['result']=$this->obj->adminviewvendor('vendors');
        
       return view('admin.viewvendors',$data);
      }
        

public function vendorapprove($id){
    $data=['status'=>"Approve"];
     $this->obj->vendoraprv('vendors',$id,$data);
     return redirect('/viewvendors');

}
public function vendordecline($id){
    $data=['status'=>"decline"];
     $this->obj->vendordclne('vendors',$id,$data);
     return redirect('/viewvendors');

}


  public function addcategory(){
       return view('admin.addcategory');
      }
      public function addcategoryaction(Request $req){
        $category=$req->input('category');
        $data=['category'=>$category];
        $this->obj8->addcategory('categories',$data);
        
        return redirect('/viewcategory');
        }

        public function viewcategory(){
        $data['result']=$this->obj8->categoryview('categories');
        return view('admin.viewcategory',$data);
    }

    
public function editcategory($id){
        $data['result']=$this->obj8->categoryedit('categories',$id);
        return view('admin.editcategory',$data);
    }

 public function categoryeditaction(Request $req,$id){
      $category=$req->input('category');
        
        $data=['category'=>$category];
        $this->obj8->editcategorydata('categories',$id,$data);
        
     return redirect('/viewcategory');
}
public function deletecategory($id){
    $this->obj8->dltecategory('categories',$id);
    return redirect('/viewcategory');

}


public function viewusers(){
    $data['result']=$this->obj->adminviewusers('customers');
        
       return view('admin.viewusers',$data);
      }
//       public function userapprove($id){
//     $data=['status'=>"Approve"];
//      $this->obj->useraprv('customers',$id,$data);
//      return redirect('/viewusers');

// }
// public function userdecline($id){
//     $data=['status'=>"decline"];
//      $this->obj->userdclne('customers',$id,$data);
//      return redirect('/viewusers');

// }
      public function viewcontact(){
    $data['result']=$this->obj->adminviewcontact('viewers');
        
       return view('admin.viewcontact',$data);
      }
      public function viewproduct(){
    $data['result']=$this->obj->adminviewproduct('vendorproducts');
        
       return view('admin.viewproduct',$data);
      }
      public function productapprove($id){
    $data=['status'=>"Available"];
     $this->obj->productaprv('vendorproducts',$id,$data);
     return redirect('/viewproduct');

}
public function productdecline($id){
    $data=['status'=>"decline"];
     $this->obj->productdclne('vendorproducts',$id,$data);
     return redirect('/viewproduct');

}
public function viewfeedback(){
    $data['result']=$this->obj->adminviewfeedback('feedback');
        
       return view('admin.viewfeedback',$data);
      }

      public function adminupdateprofile(){
         $id=session('sess');
        $data['result']=$this->obj->profileupdate('adminregister',$id);
        return view('admin.adminupdateprofile',$data);
    }

public function admineditaction(Request $req,$id){
      $name=$req->input('name');
        $email=$req->input('email');
        
        $password=$req->input('password');
        
        $data=['name'=>$name,'email'=>$email,'password'=>$password];



      
        $this->obj->aupdateprofile('adminregister',$id,$data);
        
     return redirect('/adminindex');
}
 public function adminlogout(Request $req){
        $req->session()->forget('ses');
        return redirect('/adminlogin');
     } 


}