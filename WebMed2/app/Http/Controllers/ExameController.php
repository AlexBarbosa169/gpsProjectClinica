<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExameRequest;
use App\Http\Requests\UpdateExameRequest;
use App\Repositories\ExameRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ExameController extends AppBaseController
{
    /** @var  ExameRepository */
    private $exameRepository;

    public function __construct(ExameRepository $exameRepo)
    {
        $this->exameRepository = $exameRepo;
    }

    /**
     * Display a listing of the Exame.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->exameRepository->pushCriteria(new RequestCriteria($request));
        $exames = $this->exameRepository->all();

        return view('exames.index')
            ->with('exames', $exames);
    }

    /**
     * Show the form for creating a new Exame.
     *
     * @return Response
     */
    public function create()
    {
        return view('exames.create');
    }

    /**
     * Store a newly created Exame in storage.
     *
     * @param CreateExameRequest $request
     *
     * @return Response
     */
    public function store(CreateExameRequest $request)
    {
        $input = $request->all();

        $exame = $this->exameRepository->create($input);

        Flash::success('Exame saved successfully.');

        return redirect(route('exames.index'));
    }

    /**
     * Display the specified Exame.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $exame = $this->exameRepository->findWithoutFail($id);

        if (empty($exame)) {
            Flash::error('Exame not found');

            return redirect(route('exames.index'));
        }

        return view('exames.show')->with('exame', $exame);
    }

    /**
     * Show the form for editing the specified Exame.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $exame = $this->exameRepository->findWithoutFail($id);

        if (empty($exame)) {
            Flash::error('Exame not found');

            return redirect(route('exames.index'));
        }

        return view('exames.edit')->with('exame', $exame);
    }

    /**
     * Update the specified Exame in storage.
     *
     * @param  int              $id
     * @param UpdateExameRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExameRequest $request)
    {
        $exame = $this->exameRepository->findWithoutFail($id);

        if (empty($exame)) {
            Flash::error('Exame not found');

            return redirect(route('exames.index'));
        }

        $exame = $this->exameRepository->update($request->all(), $id);

        Flash::success('Exame updated successfully.');

        return redirect(route('exames.index'));
    }

    /**
     * Remove the specified Exame from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $exame = $this->exameRepository->findWithoutFail($id);

        if (empty($exame)) {
            Flash::error('Exame not found');

            return redirect(route('exames.index'));
        }

        $this->exameRepository->delete($id);

        Flash::success('Exame deleted successfully.');

        return redirect(route('exames.index'));
    }
}
