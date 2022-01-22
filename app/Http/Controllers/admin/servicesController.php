<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
use App\Repositories\servicesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Validator;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\services_ar;
use App\Models\services_en;
use App\Models\services;
use App\Models\categories_services;
use App\Models\services_photo;

class servicesController extends AppBaseController
{
    /** @var  servicesRepository */
    private $servicesRepository;

    public function __construct(servicesRepository $servicesRepo)
    {
        $this->servicesRepository = $servicesRepo;
    }

    /**
     * Display a listing of the services.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->servicesRepository->pushCriteria(new RequestCriteria($request));
        $services = $this->servicesRepository->all();
         return view('services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new services.
     *
     * @return Response
     */
    public function create()
    {
		
		 $categories = categories_services::with('get_categories_services_ar_description')->get();
		// dd($categories);
         return view('services.create')
            ->with('categories', $categories);
			
			
     }

    /**
     * Store a newly created services in storage.
     *
     * @param CreateservicesRequest $request
     *
     * @return Response
     */
    public function store(CreateservicesRequest $request)
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
		 
		  	/*  --------------------------------------------------------------------------*/ 


        if ($validator->fails()) {
            return redirect('admin/services/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		 	/*  --------------------------------------------------------------------------*/ 

   		
      $input = $request->all();
	   	/*  --------------------------------------------------------------------------*/ 

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
	   

	    	/*  --------------------------------------------------------------------------*/ 

	  if (!empty($input['icon'])) {
			  //dd("fdfdf");
            $photoexplode = $request->icon->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->icon->getClientOriginalExtension();
       $request->icon->move(base_path() . '/public/images/', $imageNameGallery);
       $input['icon']=    $imageNameGallery; 
      
       
       }else{
       $input['icon']=    'logo.png'; 
           
       }
	   
	   	    	/*  --------------------------------------------------------------------------*/ 
 
	   
	   $input['status']=1;
		 

        $services = $this->servicesRepository->create($input);
 	   	    	/*  --------------------------------------------------------------------------*/ 


	$services_ar = new services_ar;
        $services_ar->title = $request->title_ar;
        $services_ar->status = '1';
        $services_ar->id_services =$services->id;
        $services_ar->meta_description = $request->meta_description_ar;
	   $services_ar->seo_title = $request->seo_title_ar;
        $services_ar->main_img_alt = $request->main_img_alt_ar;
        $services_ar->description = $request->description_ar;
        $services_ar->slug =  str_replace(" ","_","$request->slug_ar");
        $services_ar->save();
		
	 	/*  --------------------------------------------------------------------------*/ 

		 	$services_en = new services_en;
        $services_en->title = $request->title_en;
        $services_en->status = '1';
        $services_en->id_services =$services->id;
        $services_en->description = $request->description_en;
        $services_en->main_img_alt = $request->main_img_alt_en;
		$services_en->seo_title = $request->seo_title_en;
        $services_en->meta_description = $request->meta_description_en;
        $services_en->slug =   str_replace(" ","_","$request->slug_en");
        $services_en->save();
	 
		
		/*  --------------------------------------------------------------------------*/ 

		
        if($request->photos_id){ 


        foreach($request->photos_id as $photo1)
        {
        $photoexplode = $photo1->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
        $photo1->move(base_path() . '/public/images/', $imageNameGallery);
		
        $news_photo = new services_photo;
        $news_photo->services_id = $services->id;
        $news_photo->single_photo_gallery = "$imageNameGallery";
        $news_photo->save();
        }}


 	/*  --------------------------------------------------------------------------*/ 


	 

		
        Flash::success('Services saved successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.show')->with('services', $services);
    }

    /**
     * Show the form for editing the specified services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
		
		
		 $categories = categories_services::with('get_categories_services_ar_description')->get();
		/*  --------------------------------------------------------------------------*/ 

        $services = $this->servicesRepository->findWithoutFail($id);
				/*  --------------------------------------------------------------------------*/ 

		$services_ar=services_ar::where('id_services', $id)->first();
				/*  --------------------------------------------------------------------------*/ 

		$services_en=services_en::where('id_services', $id)->first();
				/*  --------------------------------------------------------------------------*/ 

         if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.edit')->with('services', $services)
		->with('services_ar', $services_ar)->with('services_en', $services_en)->with('categories', $categories);
    }

    /**
     * Update the specified services in storage.
     *
     * @param  int              $id
     * @param UpdateservicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateservicesRequest $request)
    {
		
		$validator = Validator::make($request->all(), [
            'slug_ar' => 'required',
            'description_ar' => 'required',
            'title_ar' => 'required',
			  'slug_en' => 'required',
            'description_en' => 'required',
            'title_en' => 'required',
         ]);
				/*  --------------------------------------------------------------------------*/ 

        if ($validator->fails()) {
            return \Redirect::back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
						/*  --------------------------------------------------------------------------*/ 

		
        $services = $this->servicesRepository->findWithoutFail($id);
						/*  --------------------------------------------------------------------------*/ 

		
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
      // $input['single_photo']=    'logo.png'; 
           
       }

	   
	   				/*  --------------------------------------------------------------------------*/ 

	   
	     
	   if (!empty($input['icon'])) {
            $photoexplode = $request->icon->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->icon->getClientOriginalExtension();
       $request->icon->move(base_path() . '/public/images/', $imageNameGallery);
       $input['icon']=    $imageNameGallery; 
      
       
       }else{
      // $input['icon']=    'logo.png'; 
           
       }
 
	   				/*  --------------------------------------------------------------------------*/ 


        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }
				/*  --------------------------------------------------------------------------*/ 

        $services = $this->servicesRepository->update(  $input, $id);
						/*  --------------------------------------------------------------------------*/ 

		$services_ar=services_ar::where('id_services', $id)->first();
         $services_ar->title = $request->title_ar;
        $services_ar->status = '1';
        $services_ar->id_services =$services->id;
		$services_ar->main_img_alt = $request->main_img_alt_ar;
		$services_ar->seo_title = $request->seo_title_ar;
        $services_ar->meta_description = $request->meta_description_ar;
        $services_ar->description = $request->description_ar;
        $services_ar->slug =    str_replace(" ","_","$request->slug_ar")  ;
        $services_ar->save();
		
			 	/*  --------------------------------------------------------------------------*/ 

		$services_en=services_en::where('id_services', $id)->first();
        $services_en->title = $request->title_en;
        $services_en->status = '1';
        $services_en->id_services =$services->id;
		$services_en->main_img_alt = $request->main_img_alt_en;
		 $services_en->seo_title = $request->seo_title_en;
        $services_en->meta_description = $request->meta_description_en;
        $services_en->description = $request->description_en;
        $services_en->slug =  str_replace(" ","_"," $request->slug_en")    ;
        $services_en->save();
		
		
						/*  --------------------------------------------------------------------------*/ 

		  if($request->photos_id){ 


        foreach($request->photos_id as $photo1)
        {
        $photoexplode = $photo1->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
        $photo1->move(base_path() . '/public/images/', $imageNameGallery);
		
        $news_photo = new services_photo;
        $news_photo->services_id = $services->id;
        $news_photo->single_photo_gallery = "$imageNameGallery";
        $news_photo->save();
        }}

						/*  --------------------------------------------------------------------------*/ 


        Flash::success('Services updated successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified services from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
		 
		
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

       $services_main= $this->servicesRepository->delete($id);
		
		$services_ar=services_ar::where('id_services','=',$id);
		 $services_ar->delete();
		 
		 $services_en=services_en::where('id_services','=',$id);
		 $services_en->delete();
        Flash::success('Services deleted successfully.');

        return redirect(route('services.index'));
    }
	
	
	
	
	  public function ajax_del_services_photo($id,$services_id)
    {
         $services = services_photo::where('id',$id)->where('services_id',$services_id)->first();
        
         if (empty($services)) {
            return back();
        }
        $services->delete($id);
        return back();
    }
	
	
	
}
