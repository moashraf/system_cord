<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesiteStingsRequest;
use App\Http\Requests\UpdatesiteStingsRequest;
use App\Repositories\siteStingsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\siteStings_ar;

class siteStingsController extends AppBaseController
{
    /** @var  siteStingsRepository */
    private $siteStingsRepository;

    public function __construct(siteStingsRepository $siteStingsRepo)
    {
        $this->siteStingsRepository = $siteStingsRepo;
    }

    /**
     * Display a listing of the siteStings.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->siteStingsRepository->pushCriteria(new RequestCriteria($request));
        $siteStings = $this->siteStingsRepository->all();
        $siteStings_ar = siteStings_ar::all();
         return view('site_stings.index')
            ->with('siteStings', $siteStings) ->with('siteStings_ar', $siteStings_ar);
    }

    /**
     * Show the form for creating a new siteStings.
     *
     * @return Response
     */
    public function create()
    {
        return view('site_stings.create');
    }

    /**
     * Store a newly created siteStings in storage.
     *
     * @param CreatesiteStingsRequest $request
     *
     * @return Response
     */
    public function store(CreatesiteStingsRequest $request)
    {
       

	   $input = $request->all();

      $siteStings = $this->siteStingsRepository->create($input);

        Flash::success('Site Stings saved successfully.');

        return redirect(route('siteStings.index'));
    }

    /**
     * Display the specified siteStings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $siteStings = $this->siteStingsRepository->findWithoutFail($id);

        if (empty($siteStings)) {
            Flash::error('Site Stings not found');

            return redirect(route('siteStings.index'));
        }

        return view('site_stings.show')->with('siteStings', $siteStings);
    }

    /**
     * Show the form for editing the specified siteStings.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
		
        $siteStings_ar = siteStings_ar::find ($id);
 
        $siteStings = $this->siteStingsRepository->findWithoutFail($id);

        if (empty($siteStings)) {
            Flash::error('Site Stings not found');

            return redirect(route('siteStings.index'));
        }

        return view('site_stings.edit')->with('siteStings', $siteStings)->with('siteStings_ar', $siteStings_ar);
    }

    /**
     * Update the specified siteStings in storage.
     *
     * @param  int              $id
     * @param UpdatesiteStingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesiteStingsRequest $request)
    {        $input = $request->all();

        $siteStings = $this->siteStingsRepository->findWithoutFail($id);

        if (empty($siteStings)) {
            Flash::error('Site Stings not found');

            return redirect(route('siteStings.index'));
        }

        $siteStings = $this->siteStingsRepository->update(   $input, $id);

		
 if(isset($request->value_ar)){
	
	
	$services_ar=siteStings_ar::where('id', $id)->first();
         $services_ar->value = $request->value_ar; 
        $services_ar->save();
 }
		
		
        Flash::success('Site Stings updated successfully.');

        return redirect(route('siteStings.index'));
    }

    /**
     * Remove the specified siteStings from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $siteStings = $this->siteStingsRepository->findWithoutFail($id);

        if (empty($siteStings)) {
            Flash::error('Site Stings not found');

            return redirect(route('siteStings.index'));
        }

        $this->siteStingsRepository->delete($id);

        Flash::success('Site Stings deleted successfully.');

        return redirect(route('siteStings.index'));
    }
}
