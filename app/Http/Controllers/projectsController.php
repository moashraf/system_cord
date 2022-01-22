<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprojectsRequest;
use App\Http\Requests\UpdateprojectsRequest;
use App\Repositories\projectsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Validator;
use App\Models\projects_en;
use App\Models\projects_ar;
use App\Models\all_models_photos;

class projectsController extends AppBaseController
{
    /** @var  projectsRepository */
    private $projectsRepository;

    public function __construct(projectsRepository $projectsRepo)
    {
        $this->projectsRepository = $projectsRepo;
    }

    /**
     * Display a listing of the projects.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->projectsRepository->pushCriteria(new RequestCriteria($request));
        $projects = $this->projectsRepository->all();

        return view('projects.index')
            ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new projects.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created projects in storage.
     *
     * @param CreateprojectsRequest $request
     *
     * @return Response
     */
    public function store(CreateprojectsRequest $request)
    {
 $input = $request->all();
		 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		 
		$validator = Validator::make($request->all(), [
            'description_ar' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'title_en' => 'required',
         ]);

        if ($validator->fails()) {
            return redirect('admin/projects/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		    if (!empty($input['image'])) {
            $photoexplode = $request->image->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->image->getClientOriginalExtension();
       $request->image->move(base_path() . '/public/images/', $imageNameGallery);
       $input['image']=    $imageNameGallery; 
      
       
       }else{
       $input['image']=    'logo.png'; 
           
       }

	   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	   if (!empty($input['icon'])) {
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
	   
	   
	   	   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	   
       
		
		
		        $projects = $this->projectsRepository->create($input);

		

	   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	   
	   
 if($request->image_path){ 

//dd($request->image_path);
        foreach($request->image_path as $photo1)
        {
        $photoexplode = $photo1->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
        $photo1->move(base_path() . '/public/images/', $imageNameGallery);
		
		
        $Singleboatgallery = new all_models_photos;
        $Singleboatgallery->all_Models_id = $projects->id;
        $Singleboatgallery->image_path = "$imageNameGallery";
         //   $Singleboatgallery->img_tit = $photoexplode[0];
        $Singleboatgallery->save();
        }}

		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$projects_ar = new projects_ar;
	    $projects_ar->id_projects =$projects->id;
        $projects_ar->title = $request->title_ar;
        $projects_ar->Governorate = $request->Governorate_ar;
        $projects_ar->area = $request->area_ar;
        $projects_ar->Country = $request->Country_ar;
        $projects_ar->Number_floors = $request->Number_floors_ar;
        $projects_ar->Region = $request->Region_ar;
        $projects_ar->description = $request->description_ar;
        $projects_ar->save();
		
			
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$projects_en = new projects_en;
		        $projects_en->title = $request->title_en;

	    $projects_en->id_projects =$projects->id;
        $projects_en->Governorate = $request->Governorate_en;
        $projects_en->area = $request->area_en;
        $projects_en->Country = $request->Country_en;
        $projects_en->Number_floors = $request->Number_floors_en;
        $projects_en->Region = $request->Region_en;
        $projects_en->description = $request->description_en;
        $projects_en->save();
		
				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		
        Flash::success('Projects saved successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified projects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        return view('projects.show')->with('projects', $projects);
    }

    /**
     * Show the form for editing the specified projects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);
		$projects_ar=projects_ar::where('id_projects', $id)->first();
		$projects_en=projects_en::where('id_projects', $id)->first();

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        return view('projects.edit')->with('projects', $projects)->with('projects_ar', $projects_ar)->with('projects_en', $projects_en);
    }

    /**
     * Update the specified projects in storage.
     *
     * @param  int              $id
     * @param UpdateprojectsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprojectsRequest $request)
    {
       


  $input = $request->all();

		
		 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		 
		$validator = Validator::make($request->all(), [
            'description_ar' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'title_en' => 'required',
         ]);

        if ($validator->fails()) {
            return redirect('admin/projects/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		    if (!empty($input['image'])) {
            $photoexplode = $request->image->getClientOriginalName();
       $photoexplode = explode(".", $photoexplode);
       $namerand = rand();
       $namerand.= $photoexplode[0];
       $imageNameGallery = $namerand . '.' . $request->image->getClientOriginalExtension();
       $request->image->move(base_path() . '/public/images/', $imageNameGallery);
       $input['image']=    $imageNameGallery; 
      
       
       }else{
      // $input['image']=    'logo.png'; 
           
       }

	   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
	   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	   $projects = $this->projectsRepository->findWithoutFail($id);

	   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	   
	   
	    if($request->image_path){ 

//dd($request->image_path);
        foreach($request->image_path as $photo1)
        {
        $photoexplode = $photo1->getClientOriginalName();
        $photoexplode = explode(".", $photoexplode);
        $namerand = rand();
        $namerand.= $photoexplode[0];
        $imageNameGallery = $namerand . '.' . $photo1->getClientOriginalExtension();
        $photo1->move(base_path() . '/public/images/', $imageNameGallery);
		
		
        $Singleboatgallery = new all_models_photos;
        $Singleboatgallery->all_Models_id = $projects->id;
        $Singleboatgallery->image_path = "$imageNameGallery";
         //   $Singleboatgallery->img_tit = $photoexplode[0];
        $Singleboatgallery->save();
        }}

		
		
		
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	  $projects_ar=projects_ar::where('id_projects', $id)->first();
	    $projects_ar->id_projects =$projects->id;
        $projects_ar->Governorate = $request->Governorate_ar;
        $projects_ar->area = $request->area_ar;
        $projects_ar->Country = $request->Country_ar;
        $projects_ar->Number_floors = $request->Number_floors_ar;
        $projects_ar->Region = $request->Region_ar;
        $projects_ar->description = $request->description_ar;
        $projects_ar->save();
		
			
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	  $projects_en=projects_en::where('id_projects', $id)->first();
	    $projects_en->id_projects =$projects->id;
        $projects_en->Governorate = $request->Governorate_en;
        $projects_en->area = $request->area_en;
        $projects_en->Country = $request->Country_en;
        $projects_en->Number_floors = $request->Number_floors_en;
        $projects_en->Region = $request->Region_en;
        $projects_en->description = $request->description_en;
        $projects_en->save();
		
				////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		
		
		

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        $projects = $this->projectsRepository->update($input, $id);

        Flash::success('Projects updated successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified projects from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projects = $this->projectsRepository->findWithoutFail($id);

		
		
		$projects_en=projects_en::where('id_projects','=',$id);
		 $projects_en->delete();
		 
		 
		 $projects_ar=projects_ar::where('id_projects','=',$id);
		 $projects_ar->delete();
		 
        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        $this->projectsRepository->delete($id);

        Flash::success('Projects deleted successfully.');

        return redirect(route('projects.index'));
    }
}
