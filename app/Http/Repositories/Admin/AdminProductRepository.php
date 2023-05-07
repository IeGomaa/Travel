<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminProductInterface;
use App\Http\Traits\ProductTrait;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProductRepository implements AdminProductInterface
{
    private $productModel;
    use ProductTrait;
    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }

    public function index()
    {
        $products = $this->getProducts();
        return view('admin.pages.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.pages.product.create');
    }

    public function store($request, $service)
    {
        $image = $service->uploadImage($request->image);
        $this->productModel::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $image,
            'discount' => $request->discount,
            'rate' => $request->rate,
            'count' => $request->count
        ]);
        Alert::toast('Product Was Created Successfully', 'success');
        return redirect(route('admin.product.index'));
    }

    public function delete($request, $service): RedirectResponse
    {
        $product = $this->findProductById($request->id);
        $service->deleteImageInLocal($product->image);
        $product->delete();
        Alert::toast('Product Was Deleted Successfully', 'success');
        return back();
    }

    public function edit($request)
    {
        $product = $this->findProductById($request->id);
        return view('admin.pages.product.edit', compact('product'));
    }

    public function update($request, $service)
    {
        $product = $this->findProductById($request->id);
        $image = $service->checkImage($request->image, $product);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount,
            'rate' => $request->rate,
            'count' => $request->count,
            'image' => $image
        ]);
        Alert::toast('Product Was Updated Successfully', 'success');
        return redirect(route('admin.product.index'));
    }
}
