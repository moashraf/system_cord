<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevideoRequest;
use App\Http\Requests\UpdatevideoRequest;
use App\Repositories\videoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class videoController extends AppBaseController
{
    /** @var  videoRepository */
    private $videoRepository;

    public function __construct(videoRepository $videoRepo)
    {
        $this->videoRepository = $videoRepo;
    }

    /**
     * Display a listing of the video.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->videoRepository->pushCriteria(new RequestCriteria($request));
        $videos = $this->videoRepository->all();

        return view('videos.index')
            ->with('videos', $videos);
    }

    /**
     * Show the form for creating a new video.
     *
     * @return Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created video in storage.
     *
     * @param CreatevideoRequest $request
     *
     * @return Response
     */
    public function store(CreatevideoRequest $request)
    {
        $input = $request->all();

        $video = $this->videoRepository->create($input);

        Flash::success('Video saved successfully.');

        return redirect(route('videos.index'));
    }

    /**
     * Display the specified video.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $video = $this->videoRepository->findWithoutFail($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        return view('videos.show')->with('video', $video);
    }

    /**
     * Show the form for editing the specified video.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $video = $this->videoRepository->findWithoutFail($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        return view('videos.edit')->with('video', $video);
    }

    /**
     * Update the specified video in storage.
     *
     * @param  int              $id
     * @param UpdatevideoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevideoRequest $request)
    {
        $video = $this->videoRepository->findWithoutFail($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        $video = $this->videoRepository->update($request->all(), $id);

        Flash::success('Video updated successfully.');

        return redirect(route('videos.index'));
    }

    /**
     * Remove the specified video from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $video = $this->videoRepository->findWithoutFail($id);

        if (empty($video)) {
            Flash::error('Video not found');

            return redirect(route('videos.index'));
        }

        $this->videoRepository->delete($id);

        Flash::success('Video deleted successfully.');

        return redirect(route('videos.index'));
    }
}
