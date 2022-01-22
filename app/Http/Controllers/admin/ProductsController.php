<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Repositories\ProductsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Categories_Products;
//use App\Models\ProductsPhotos;

class ProductsController extends AppBaseController
{ 
    /** @var  ProductsRepository */
    private $productsRepository;

    public function __construct(ProductsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

 


    /**
     * Display a listing of the Products.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productsRepository->pushCriteria(new RequestCriteria($request));
        $products = $this->productsRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Products.
     *
     * @return Response
     */
    public function create()
    { $cat = Categories_Products::all();
        return view('products.create')
        ->with('cat', $cat);
    }

    /**
     * Store a newly created Products in storage.
     *
     * @param CreateProductsRequest $request
     *
     * @return Response
     */
    public function store(CreateProductsRequest $request)
    {
        $input = $request->all();
        if (!empty($input['single_photo'])) {
            $photoexplode = $request->single_photo->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
       $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
       $input['single_photo']=    $imageNameGallery; 
      
       
       }else{
       $input['single_photo']=    'logo.png'; 
           
       }



        $products = $this->productsRepository->create($input);

        if($request->photos_id){ 


        foreach($request->photos_id as $photo1)
        {
        $photoexplode = $photo1->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
        $photo1->move(base_path() . '/public/images/', $imageNameGallery);
        $Singleboatgallery = new ProductsPhotos;
        $Singleboatgallery->Product_id = $products->id;
        $Singleboatgallery->Photo = "$imageNameGallery";
        $Singleboatgallery->lang = App()->getLocale();
         //   $Singleboatgallery->img_tit = $photoexplode[0];
        $Singleboatgallery->save();
        }}





        Flash::success('Products saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified Products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $cat = Categories_Products::all();
    

        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('products', $products)     ->with('cat', $cat);
    }

    /**
     * Update the specified Products in storage.
     *
     * @param  int              $id
     * @param UpdateProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductsRequest $request)
    {
        
        

 $products = $this->productsRepository->findWithoutFail($id);

      
        $input = $request->all();

       
        if (!empty($input['single_photo'])) {
             $photoexplode = $request->single_photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
        $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
        $input['single_photo']=    $imageNameGallery; 
       
        
        } 


        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $products = $this->productsRepository->update(   $input , $id);


if($request->photos_id){ 

        foreach($request->photos_id as $photo1)
        {
        $photoexplode = $photo1->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
        $photo1->move(base_path() . '/public/images/', $imageNameGallery);
        $Singleboatgallery = new ProductsPhotos;
        $Singleboatgallery->Product_id = $products->id;
        $Singleboatgallery->Photo = "$imageNameGallery";
        $Singleboatgallery->lang = App()->getLocale();
         //   $Singleboatgallery->img_tit = $photoexplode[0];
        $Singleboatgallery->save();
        }}


        
        Flash::success('Products updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Products from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $products = $this->productsRepository->findWithoutFail($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $this->productsRepository->delete($id);

        Flash::success('Products deleted successfully.');

        return redirect(route('products.index'));
    }
}
