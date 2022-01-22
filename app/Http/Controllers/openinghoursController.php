<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateopeninghoursRequest;
use App\Http\Requests\UpdateopeninghoursRequest;
use App\Repositories\openinghoursRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class openinghoursController extends AppBaseController
{
    /** @var  openinghoursRepository */
    private $openinghoursRepository;

    public function __construct(openinghoursRepository $openinghoursRepo)
    {
        $this->openinghoursRepository = $openinghoursRepo;
    }

    /**
     * Display a listing of the openinghours.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->openinghoursRepository->pushCriteria(new RequestCriteria($request));
        $openinghours = $this->openinghoursRepository->all();

        return view('openinghours.index')
            ->with('openinghours', $openinghours);
    }

    /**
     * Show the form for creating a new openinghours.
     *
     * @return Response
     */
    public function create()
    {
        return view('openinghours.create');
    }

    /**
     * Store a newly created openinghours in storage.
     *
     * @param CreateopeninghoursRequest $request
     *
     * @return Response
     */
    public function store(CreateopeninghoursRequest $request)
    {
        $input = $request->all();

        $openinghours = $this->openinghoursRepository->create($input);

        Flash::success('Openinghours saved successfully.');

        return redirect(route('openinghours.index'));
    }

    /**
     * Display the specified openinghours.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $openinghours = $this->openinghoursRepository->findWithoutFail($id);

        if (empty($openinghours)) {
            Flash::error('Openinghours not found');

            return redirect(route('openinghours.index'));
        }

        return view('openinghours.show')->with('openinghours', $openinghours);
    }

    /**
     * Show the form for editing the specified openinghours.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $openinghours = $this->openinghoursRepository->findWithoutFail($id);

        if (empty($openinghours)) {
            Flash::error('Openinghours not found');

            return redirect(route('openinghours.index'));
        }

        return view('openinghours.edit')->with('openinghours', $openinghours);
    }

    /**
     * Update the specified openinghours in storage.
     *
     * @param  int              $id
     * @param UpdateopeninghoursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateopeninghoursRequest $request)
    {
        $openinghours = $this->openinghoursRepository->findWithoutFail($id);

        if (empty($openinghours)) {
            Flash::error('Openinghours not found');

            return redirect(route('openinghours.index'));
        }

        $openinghours = $this->openinghoursRepository->update($request->all(), $id);

        Flash::success('Openinghours updated successfully.');

        return redirect(route('openinghours.index'));
    }

    /**
     * Remove the specified openinghours from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $openinghours = $this->openinghoursRepository->findWithoutFail($id);

        if (empty($openinghours)) {
            Flash::error('Openinghours not found');

            return redirect(route('openinghours.index'));
        }

        $this->openinghoursRepository->delete($id);

        Flash::success('Openinghours deleted successfully.');

        return redirect(route('openinghours.index'));
    }
}
