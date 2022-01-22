<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclientsRequest;
use App\Http\Requests\UpdateclientsRequest;
use App\Repositories\clientsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Validator;

use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\clients_en;
use App\Models\clients_ar;
class clientsController extends AppBaseController
{
    /** @var  clientsRepository */
    private $clientsRepository;

    public function __construct(clientsRepository $clientsRepo)
    {
        $this->clientsRepository = $clientsRepo;
    }

    /**
     * Display a listing of the clients.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clientsRepository->pushCriteria(new RequestCriteria($request));
        $clients = $this->clientsRepository->all();

        return view('clients.index')
            ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new clients.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created clients in storage.
     *
     * @param CreateclientsRequest $request
     *
     * @return Response
     */
    public function store(CreateclientsRequest $request)
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
            return redirect('admin/clients/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
	   
        $clients = $this->clientsRepository->create($input);
		
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$clients_ar = new clients_ar;
        $clients_ar->title = $request->title_ar;
        $clients_ar->id_clients =$clients->id;
        $clients_ar->description = $request->description_ar;
        $clients_ar->save();
		
			
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		$clients_en = new clients_en;
        $clients_en->title = $request->title_en;
        $clients_en->id_clients =$clients->id;
        $clients_en->description = $request->description_en;
        $clients_en->save();
       		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 
        Flash::success('Clients saved successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Display the specified clients.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clients = $this->clientsRepository->findWithoutFail($id);

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        return view('clients.show')->with('clients', $clients);
    }

    /**
     * Show the form for editing the specified clients.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clients = $this->clientsRepository->findWithoutFail($id);
		$clients_ar=clients_ar::where('id_clients', $id)->first();
		$clients_en=clients_en::where('id_clients', $id)->first();
        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        return view('clients.edit')->with('clients', $clients)->with('clients_ar', $clients_ar)->with('clients_en', $clients_en);
    }

    /**
     * Update the specified clients in storage.
     *
     * @param  int              $id
     * @param UpdateclientsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclientsRequest $request)
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
            return redirect('admin/clients/create')
                        ->withErrors($validator)
                        ->withInput();
        }
		
		
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
 				 	        $clients = $this->clientsRepository->findWithoutFail($id);
	   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

					
					$clients_ar=clients_ar::where('id_clients', $id)->first();

        $clients_ar->title = $request->title_ar;
        $clients_ar->id_clients =$clients->id;
        $clients_ar->description = $request->description_ar;
        $clients_ar->save();
		
			
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		 				 	$clients_en=clients_en::where('id_clients', $id)->first();

         $clients_en->title = $request->title_en;
        $clients_en->id_clients =$clients->id;
        $clients_en->description = $request->description_en;
        $clients_en->save();
       		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 

        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        $clients = $this->clientsRepository->update( $input, $id);

        Flash::success('Clients updated successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified clients from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clients = $this->clientsRepository->findWithoutFail($id);

		
		
		
		$clients_en=clients_en::where('id_clients','=',$id);
		 $clients_en->delete();
		 
		 $clients_ar=clients_ar::where('id_clients','=',$id);
		 $clients_ar->delete();
		 
		 
		 
        if (empty($clients)) {
            Flash::error('Clients not found');

            return redirect(route('clients.index'));
        }

        $this->clientsRepository->delete($id);

        Flash::success('Clients deleted successfully.');

        return redirect(route('clients.index'));
    }
}
