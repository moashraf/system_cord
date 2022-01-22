<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createcategories_servicesRequest;
use App\Http\Requests\Updatecategories_servicesRequest;
use App\Repositories\categories_servicesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

 use Validator;
 use App\Models\categories_services_en;
 use App\Models\categories_services_ar;
 
class categories_servicesController extends AppBaseController
{
    /** @var  categories_servicesRepository */
    private $categoriesServicesRepository;

    public function __construct(categories_servicesRepository $categoriesServicesRepo)
    {
        $this->categoriesServicesRepository = $categoriesServicesRepo;
    }

    /**
     * Display a listing of the categories_services.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->categoriesServicesRepository->pushCriteria(new RequestCriteria($request));
        $categoriesServices = $this->categoriesServicesRepository->all();

        return view('categories_services.index')
            ->with('categoriesServices', $categoriesServices);
    }

    /**
     * Show the form for creating a new categories_services.
     *
     * @return Response
     */
    public function create()
    {
		
		  $categories = $this->categoriesServicesRepository->with('get_categories_services_ar_description')->all();
         return view('categories_services.create')
            ->with('categories', $categories);
			
			
     }

    /**
     * Store a newly created categories_services in storage.
     *
     * @param Createcategories_servicesRequest $request
     *
     * @return Response
     */
    public function store(Createcategories_servicesRequest $request)
    {

			$validator = Validator::make($request->all(), [
            'meta_description_en' => 'required',
            'main_img_alt_en' => 'required',
            'main_img_alt_ar' => 'required',
            'meta_description_ar' => 'required',
            'title_en' => 'required',
            'slug_en' => 'required',
            'description_en' => 'required',
			  'title_ar' => 'required',
            'slug_ar' => 'required',
            'description_ar' => 'required',
         ]);

        if ($validator->fails()) {
            return redirect('admin/categoriesServices/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		
		
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
 
 		
				        $categoriesServices = $this->categoriesServicesRepository->create($input);

		$categories_services_en = new categories_services_en;
        $categories_services_en->title = $request->title_en;
        $categories_services_en->status = '1';
        $categories_services_en->id_categories =$categoriesServices->id;
        $categories_services_en->meta_description = $request->meta_description_en;
	    $categories_services_en->seo_title = $request->seo_title_en;
        $categories_services_en->main_img_alt = $request->main_img_alt_en;
        $categories_services_en->description = $request->description_en;
        $categories_services_en->slug = $request->slug_en;
        $categories_services_en->save();
		
		$categories_services_ar = new categories_services_ar;
        $categories_services_ar->title = $request->title_ar;
        $categories_services_ar->status = '1';
        $categories_services_ar->id_categories =$categoriesServices->id;
        $categories_services_ar->meta_description = $request->meta_description_ar;
	    $categories_services_ar->seo_title = $request->seo_title_ar;
        $categories_services_ar->main_img_alt = $request->main_img_alt_ar;
        $categories_services_ar->description = $request->description_ar;
        $categories_services_ar->slug = $request->slug_ar;
        $categories_services_ar->save();
		

        Flash::success('Categories Services saved successfully.');

        return redirect(route('categoriesServices.index'));
    }

    /**
     * Display the specified categories_services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriesServices = $this->categoriesServicesRepository->findWithoutFail($id);

        if (empty($categoriesServices)) {
            Flash::error('Categories Services not found');

            return redirect(route('categoriesServices.index'));
        }

        return view('categories_services.show')->with('categoriesServices', $categoriesServices);
    }

    /**
     * Show the form for editing the specified categories_services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
		
		    $categoriesServices = $this->categoriesServicesRepository->findWithoutFail($id);

		
    $categories = $this->categoriesServicesRepository->with('get_categories_services_ar_description')->all();
	$categories_services_ar=categories_services_ar::where('id_categories', $id)->first();
    $categories_services_en=categories_services_en::where('id_categories', $id)->first();

      
 
        if (empty($categoriesServices)) {
            Flash::error('Categories Services not found');

            return redirect(route('categoriesServices.index'));
        }
        return view('categories_services.edit')
		->with('categoriesServices', $categoriesServices)
	    ->with('categories', $categories)
 		->with('categories_services_ar', $categories_services_ar)
		->with('categories_services_en', $categories_services_en);
    }

    /**
     * Update the specified categories_services in storage.
     *
     * @param  int              $id
     * @param Updatecategories_servicesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatecategories_servicesRequest $request)
    {
       
		        $input = $request->all();

	  $categoriesServices = $this->categoriesServicesRepository->findWithoutFail($id);



	if (!empty($input['single_photo'])) {
             $photoexplode = $request->single_photo->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $request->single_photo->getClientOriginalExtension();
        $request->single_photo->move(base_path() . '/public/images/', $imageNameGallery);
        $input['single_photo']=    $imageNameGallery; 
       
        
        } 



 	 	$categories_services_en=categories_services_en::where('id_categories', $id)->first();
        $categories_services_en->title = $request->title_en;
        $categories_services_en->status = '1';
        $categories_services_en->id_categories =$categoriesServices->id;
        $categories_services_en->meta_description = $request->meta_description_en;
	    $categories_services_en->seo_title = $request->seo_title_en;
        $categories_services_en->main_img_alt = $request->main_img_alt_en;
        $categories_services_en->description = $request->description_en;
        $categories_services_en->slug = $request->slug_en;
        $categories_services_en->save();
		
		$categories_services_ar=categories_services_ar::where('id_categories', $id)->first();
        $categories_services_ar->title = $request->title_ar;
        $categories_services_ar->status = '1';
        $categories_services_ar->id_categories =$categoriesServices->id;
        $categories_services_ar->meta_description = $request->meta_description_ar;
	    $categories_services_ar->seo_title = $request->seo_title_ar;
        $categories_services_ar->main_img_alt = $request->main_img_alt_ar;
        $categories_services_ar->description = $request->description_ar;
        $categories_services_ar->slug = $request->slug_ar;
        $categories_services_ar->save();
		 
		
		
		

        if (empty($categoriesServices)) {
            Flash::error('Categories Services not found');

            return redirect(route('categoriesServices.index'));
        }

        $categoriesServices = $this->categoriesServicesRepository->update( $input , $id);

        Flash::success('Categories Services updated successfully.');

        return redirect(route('categoriesServices.index'));
    }

    /**
     * Remove the specified categories_services from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriesServices = $this->categoriesServicesRepository->findWithoutFail($id);


        if (empty($categoriesServices)) {
            Flash::error('Categories Services not found');

            return redirect(route('categoriesServices.index'));
        }



			$categories_services_ar=categories_services_ar::where('id_categories','=',$id);
		 $categories_services_ar->delete();
		 
		 $categories_services_en=categories_services_en::where('id_categories','=',$id);
		 $categories_services_en->delete();
		 
		 
        $this->categoriesServicesRepository->delete($id);

        Flash::success('Categories Services deleted successfully.');

        return redirect(route('categoriesServices.index'));
    }
}
