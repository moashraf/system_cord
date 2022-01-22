<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategories_ProductsRequest;
use App\Http\Requests\UpdateCategories_ProductsRequest;
use App\Repositories\Categories_ProductsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Categories_Products;
class Categories_ProductsController extends AppBaseController
{
    /** @var  Categories_ProductsRepository */
    private $categoriesProductsRepository;

    public function __construct(Categories_ProductsRepository $categoriesProductsRepo)
    {
        $this->categoriesProductsRepository = $categoriesProductsRepo;
    }

    /**
     * Display a listing of the Categories_Products.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->categoriesProductsRepository->pushCriteria(new RequestCriteria($request));
        $categoriesProducts = $this->categoriesProductsRepository->all();

        return view('categories__products.index')
            ->with('categoriesProducts', $categoriesProducts);
    }

    /**
     * Show the form for creating a new Categories_Products.
     *
     * @return Response
     */
    public function create()
    {
        $cat = Categories_Products::all();
        return view('categories__products.create')
        ->with('cat', $cat);
     }

    /**
     * Store a newly created Categories_Products in storage.
     *
     * @param CreateCategories_ProductsRequest $request
     *
     * @return Response
     */
    public function store(CreateCategories_ProductsRequest $request)
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


        


        $categoriesProducts = $this->categoriesProductsRepository->create($input);

        Flash::success('Categories  Products saved successfully.');

        return redirect(route('categoriesProducts.index'));
    }

    /**
     * Display the specified Categories_Products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriesProducts = $this->categoriesProductsRepository->findWithoutFail($id);

        if (empty($categoriesProducts)) {
            Flash::error('Categories  Products not found');

            return redirect(route('categoriesProducts.index'));
        }

        return view('categories__products.show')->with('categoriesProducts', $categoriesProducts);
    }

    /**
     * Show the form for editing the specified Categories_Products.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriesProducts = $this->categoriesProductsRepository->findWithoutFail($id);

        if (empty($categoriesProducts)) {
            Flash::error('Categories  Products not found');

            return redirect(route('categoriesProducts.index'));
        }

        return view('categories__products.edit')->with('categoriesProducts', $categoriesProducts);
    }

    /**
     * Update the specified Categories_Products in storage.
     *
     * @param  int              $id
     * @param UpdateCategories_ProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategories_ProductsRequest $request)
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
       } 



        $categoriesProducts = $this->categoriesProductsRepository->findWithoutFail($id);

        if (empty($categoriesProducts)) {
            Flash::error('Categories  Products not found');

            return redirect(route('categoriesProducts.index'));
        }

        $categoriesProducts = $this->categoriesProductsRepository->update(   $input , $id);

        Flash::success('Categories  Products updated successfully.');

        return redirect(route('categoriesProducts.index'));
    }

    /**
     * Remove the specified Categories_Products from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriesProducts = $this->categoriesProductsRepository->findWithoutFail($id);

        if (empty($categoriesProducts)) {
            Flash::error('Categories  Products not found');

            return redirect(route('categoriesProducts.index'));
        }

        $this->categoriesProductsRepository->delete($id);

        Flash::success('Categories  Products deleted successfully.');

        return redirect(route('categoriesProducts.index'));
    }
}
