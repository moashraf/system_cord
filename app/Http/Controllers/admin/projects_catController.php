<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createprojects_catRequest;
use App\Http\Requests\Updateprojects_catRequest;
use App\Repositories\projects_catRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class projects_catController extends AppBaseController
{
    /** @var  projects_catRepository */
    private $projectsCatRepository;

    public function __construct(projects_catRepository $projectsCatRepo)
    {
        $this->projectsCatRepository = $projectsCatRepo;
    }

    /**
     * Display a listing of the projects_cat.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->projectsCatRepository->pushCriteria(new RequestCriteria($request));
        $projectsCats = $this->projectsCatRepository->all();

        return view('projects_cats.index')
            ->with('projectsCats', $projectsCats);
    }

    /**
     * Show the form for creating a new projects_cat.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects_cats.create');
    }

    /**
     * Store a newly created projects_cat in storage.
     *
     * @param Createprojects_catRequest $request
     *
     * @return Response
     */
    public function store(Createprojects_catRequest $request)
    {
        $input = $request->all();

        $projectsCat = $this->projectsCatRepository->create($input);

        Flash::success('Projects Cat saved successfully.');

        return redirect(route('projectsCats.index'));
    }

    /**
     * Display the specified projects_cat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projectsCat = $this->projectsCatRepository->findWithoutFail($id);

        if (empty($projectsCat)) {
            Flash::error('Projects Cat not found');

            return redirect(route('projectsCats.index'));
        }

        return view('projects_cats.show')->with('projectsCat', $projectsCat);
    }

    /**
     * Show the form for editing the specified projects_cat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projectsCat = $this->projectsCatRepository->findWithoutFail($id);

        if (empty($projectsCat)) {
            Flash::error('Projects Cat not found');

            return redirect(route('projectsCats.index'));
        }

        return view('projects_cats.edit')->with('projectsCat', $projectsCat);
    }

    /**
     * Update the specified projects_cat in storage.
     *
     * @param  int              $id
     * @param Updateprojects_catRequest $request
     *
     * @return Response
     */
    public function update($id, Updateprojects_catRequest $request)
    {
        $projectsCat = $this->projectsCatRepository->findWithoutFail($id);

        if (empty($projectsCat)) {
            Flash::error('Projects Cat not found');

            return redirect(route('projectsCats.index'));
        }

        $projectsCat = $this->projectsCatRepository->update($request->all(), $id);

        Flash::success('Projects Cat updated successfully.');

        return redirect(route('projectsCats.index'));
    }

    /**
     * Remove the specified projects_cat from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projectsCat = $this->projectsCatRepository->findWithoutFail($id);

        if (empty($projectsCat)) {
            Flash::error('Projects Cat not found');

            return redirect(route('projectsCats.index'));
        }

        $this->projectsCatRepository->delete($id);

        Flash::success('Projects Cat deleted successfully.');

        return redirect(route('projectsCats.index'));
    }
}
