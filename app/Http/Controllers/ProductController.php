<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $dir = 'product';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::latest()->paginate(3);

        // $count=Product::get()->max('cost');
        // $product=Product::where('name', 'phone')->first();
        // $pro=Product::where('id', 3)->get();
        // $profind=Product::find(2);
        return view('admin.products.showall',
        ['products'=>$products,




        // 'product'=>$product,
        // 'pro'=>$pro,
        // 'profind'=>$profind,
        // 'count'=>$count,
       
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {$category = category::get();
       
        return view('admin.products.create',
    ['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {  
        //  $validated = $request->validate([
        //     'name' => 'required|between:3,10',
        //     'cost' => 'required',
        //     'description' => 'nullable|between:10,1000',
        //     'category' => 'required',
        //     'image' => 'required',
        // ]);
        
        $category = category::where(['id'=>$request->category])->firstOrFail();
        $product= new Product();
        $product->name=$request->name;
        $product->cost=$request->cost;
        $product->description=$request->description;
        // $category->category_id=1;
        $product->category()->associate($category);
        $image_upload = $this->uploadImage($request->image, $this->dir);
        $product->image=$image_upload;

        if ($product->save())
                return redirect()->route('product.index');
                return redirect()->back();

     
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // $pr= new post();

        // $post->name = $request-> name;
        // $post->description = $request-> description;
        // $post->status =$request->input('status') == true ? '1' : '-1';
        // $cover_upload = $this->uploadImage($request->cover, $this->dir);

        //     if ($post->save())
        //         return redirect()->route(post.index')->with(['message' =>'add successfully), 'type' => 'alert-success']);
        //         return redirect()->back();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Product = Product::find($id);
        return view('admin.products.edit')->with([
            'product'=>$Product,
        ]);

    }
  

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $Product =  Product::find($id);
            $Product->name= $request->name;
            $Product-> cost = $request-> cost;
            $Product-> description = $request-> description;
           
            if ($request->hasFile('image')) {

                $this->removeImage($Product->image, $this->dir);
                $image_upload = $this->uploadImage($request->image,   $this->dir);
                $Product->image = $image_upload;
            }
            if ($Product ->save())
                return redirect()->route('product.index')->with(['message' =>'add successfully', 'type' => 'alert-success']);
                return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->status *= -1;
        if($product->save())
        return redirect()->route('product.index')->with(['message' =>'add successfully', 'type' => 'alert-success']);

    }
    public function uploadImage($image, $dir) {
        $imageName  = uniqid().'_'.trim($image->getClientOriginalName());
        $path        = public_path()."/admin/images/".$dir;
        if ( ! file_exists($path) ) {mkdir($path, 0777, true);}
        $image->move($path,$imageName);
        return $imageName;
}
public function removeImage($image, $dir){
    if (\File::exists(public_path()."/admin/images/".$dir)){
        \File::delete(public_path()."/admin/images/".$dir."/".$image);
    }
}

}
