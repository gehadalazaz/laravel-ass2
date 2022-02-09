<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    

   // get list of the articls inside each category 
     // get list of the cateories 
     public function list($id)
     {
         $articls = Article::where('catID','=', $id)->get(); // SELECT * from categories;
       
         return view('article',['articls'=>$articls ]);
        //  return $articls;
     }

     
     public function showDetails($id)
     {
          $articls = Article::find($id);
         
         return view('details',['articls'=>$articls ]);
     //     return $articls;
     }

     public function update($id)
     {
          $articls = Article::find($id);
         
         return view('updateArticle',['articls'=>$articls ]);
                 // return $categories;
 
     }
 
     public function edite(Request $request)
     {
         $articls=Article::where('id', $request->id)
         ->update([
             'name' => $request -> name ,

          ]);
         return redirect('/article/' .$request->catID);
     //     return $articls;
         // save new category
     }


     public function delete($id)
     {
         // $category = Category::where('id','=', $id)->get(); 
                 $articls = Article::findOrFail($id);
         if($articls)
         {
             $articls -> delete();
         }
 
         return redirect('/create');
 
     }


     public function create()
     {
         return view('creatArticle');
     }
 
     public function save(Request $request)
     {
         $articls = new Article();
         $articls -> name = $request -> name;
         $articls -> catID = $request -> catID;
         $articls -> details = $request -> details;
         $articls -> is_used = $request -> is_used;
         $articls -> slug = $request -> slug;
       


         $articls->save(); // INSERT INTO TABLE 
 
         return redirect('/cats');
         // return $category;
         // save new category
     }































}
