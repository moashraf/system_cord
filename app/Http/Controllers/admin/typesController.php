<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetypesRequest;
use App\Http\Requests\UpdatetypesRequest;
use App\Repositories\typesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Validator;
use App\Models\types_en;
use App\Models\types_ar;

class typesController extends AppBaseController
{
    /** @var  typesRepository */
    private $typesRepository;

    public function __construct(typesRepository $typesRepo)
    {
        $this->typesRepository = $typesRepo;
    }

    /**
     * Display a listing of the types.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->typesRepository->pushCriteria(new RequestCriteria($request));
        $types = $this->typesRepository->all();

        return view('types.index')
            ->with('types', $types);
    }

    /**
     * Show the form for creating a new types.
     *
     * @return Response
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created types in storage.
     *
     * @param CreatetypesRequest $request
     *
     * @return Response
     */
    public function store(CreatetypesRequest $request)
    {
		
		
			
	$validator = Validator::make($request->all(), [
            'job_title_en' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
			  'slug_en' => 'required', 
			  'job_title_ar' => 'required',
            'title_ar' => 'required',
            'description_ar' => 'required',
			  'slug_ar' => 'required', 
         ]);

        if ($validator->fails()) {
            return redirect('admin/types/create')
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
        $types = $this->typesRepository->create($input);

		
		
		$types_ar = new types_ar;
        $types_ar->job_title = $request->job_title_ar;
        $types_ar->id_types =$types->id;
        $types_ar->title = $request->title_ar;
        $types_ar->description = $request->description_ar;
        $types_ar->slug = $request->slug_ar;
        $types_ar->save();
		
			
		 
			$types_en = new types_en;
        $types_en->job_title = $request->job_title_en;
        $types_en->id_types =$types->id;
        $types_en->title = $request->title_en;
        $types_en->description = $request->description_en;
        $types_en->slug = $request->slug_en;
        $types_en->save();
		
		
		
		
        Flash::success('Types saved successfully.');

        return redirect(route('types.index'));
    }

    /**
     * Display the specified types.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $types = $this->typesRepository->findWithoutFail($id);

        if (empty($types)) {
            Flash::error('Types not found');

            return redirect(route('types.index'));
        }

        return view('types.show')->with('types', $types);
    }

    /**
     * Show the form for editing the specified types.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $types = $this->typesRepository->findWithoutFail($id);
		$types_en=types_en::where('id_types', $id)->first();
		$types_ar=types_ar::where('id_types', $id)->first();

        if (empty($types)) {
            Flash::error('Types not found');

            return redirect(route('types.index'));
        }

        return view('types.edit')->with('types', $types)->with('types_ar', $types_ar)->with('types_en', $types_en);
    }

    /**
     * Update the specified types in storage.
     *
     * @param  int              $id
     * @param UpdatetypesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetypesRequest $request)
    {
         $input = $request->all();
		 
		 
		 
		 
		 		
	$validator = Validator::make($request->all(), [
            'job_title_en' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
			  'slug_en' => 'required', 
			  'job_title_ar' => 'required',
            'title_ar' => 'required',
            'description_ar' => 'required',
			  'slug_ar' => 'required', 
         ]);

        if ($validator->fails()) {
           return \Redirect::back()
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		
		
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


	   $types = $this->typesRepository->findWithoutFail($id);

	   
	   
	   
 	   	    $types_en=types_en::where('id_types', $id)->first();

        $types_en->job_title = $request->job_title_en;
        $types_en->id_types =$types->id;
        $types_en->title = $request->title_en;
        $types_en->description = $request->description_en;
        $types_en->slug = $request->slug_en;
        $types_en->save();
		
		
		
		
 	   	    $types_ar=types_ar::where('id_types', $id)->first();
  $types_ar->job_title = $request->job_title_ar;
        $types_ar->id_types =$types->id;
        $types_ar->title = $request->title_ar;
        $types_ar->description = $request->description_ar;
        $types_ar->slug = $request->slug_ar;
        $types_ar->save();
		
		 
		
		
		
		
        if (empty($types)) {
            Flash::error('Types not found');

            return redirect(route('types.index'));
        }

        $types = $this->typesRepository->update( $input  , $id);

        Flash::success('Types updated successfully.');

        return redirect(route('types.index'));
    }

    /**
     * Remove the specified types from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $types = $this->typesRepository->findWithoutFail($id);

        if (empty($types)) {
            Flash::error('Types not found');

            return redirect(route('types.index'));
        }

        $this->typesRepository->delete($id);
		
 
		$types_ar=types_ar::where('id_types','=',$id);
		 $types_ar->delete();
		 
		 
		$types_en=types_en::where('id_types','=',$id);
		 $types_en->delete();
		 
		 

        Flash::success('Types deleted successfully.');

        return redirect(route('types.index'));
    }
}
