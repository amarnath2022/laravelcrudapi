<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;
use PhpParser\Node\Stmt\Return_;
class apiController extends Controller
{
    function lists(Request $id)

    {

        echo"hi";
         
      return $categories = category::all();

    }
    function list( $id)

    {

        echo"hi";
         
      return $categories = category::find($id);

    }

    public function in(Request $req)
    {
        
        $device= new category;
        $device->title=$req->title;
        //$device->class=$req->class;
        //$device->email=$req->email;
        //$device->mob=$req->mob;
        $result=$device->save();
        if($result)
        {
           return["result"=>"Data has been saved"];
           
        }
        else{
           return["result"=>"Data not saved"];
        }
    }

    public function update(Request $request,$id){

      $categories = category::find($id);
      $categories->title = $request->title;
      if($categories->update())
      {

        echo"update";
        echo $id;
      return category::find($id);
      }
      else{
        echo"problem";
      }
      
      
      }
      
    
public function del($id)
      {
        $category= category::whereId($id);
       if( $category->delete($id))
       {
        echo"Record deleted successfully";
       }
       else{
        echo"problem";
       }
    }
  }
