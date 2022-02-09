<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    //get categories from database
    //select * from categories
    ///////////////////////////list category//////////////////////
    public function list(){
        $categories = Category::all();       //Category is the class in Category model
        return view('category',['categories'=>$categories]);

    }
    ////////////////////////create category///////////////////////
    public function create(){
        return view('createCat');
    }
    ////////////////save category/////////////////////////////////


    public function save(Request $request)
    {
        $category = new Category;
        $category -> name = $request -> name;

        // $category->timestamp('expire_at');
        $category->save(); // INSERT INTO TABLE 

        return redirect('/cats');
        // return $category;
        // save new category
    }


    /////////////////////////delete category////////////////////////////////
    public function delete($id){
        $category=Category::findOrfail();
        if($category){
            $category->delete();
        }
        //does not work
        return redirect()->route('categories.list');

    }
    ////////update category//////
    public function update($id)
    {
        $categories = Category::find($id);
        return view('update',['categories'=>$categories ]);
                // return $categories;

    }
    //edit////
    public function edite(Request $request)
    {
        $category=Category::where('id', $request->id)
        ->update([
            'name' => $request -> name
         ]);
        return redirect('/cats');
        // return $category;
        // save new category
    }


}
