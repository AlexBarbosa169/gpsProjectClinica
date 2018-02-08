<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrescricaoRequest;
use App\Http\Requests\UpdatePrescricaoRequest;
use App\Repositories\PrescricaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PrescricaoController extends AppBaseController
{
    /** @var  PrescricaoRepository */
    private $prescricaoRepository;

    public function __construct(PrescricaoRepository $prescricaoRepo)
    {
        $this->prescricaoRepository = $prescricaoRepo;
    }

    /**
     * Display a listing of the Prescricao.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->prescricaoRepository->pushCriteria(new RequestCriteria($request));
        $prescricaos = $this->prescricaoRepository->all();

        return view('prescricaos.index')
            ->with('prescricaos', $prescricaos);
    }

    /**
     * Show the form for creating a new Prescricao.
     *
     * @return Response
     */
    public function create()
    {
        return view('prescricaos.create');
    }

    /**
     * Store a newly created Prescricao in storage.
     *
     * @param CreatePrescricaoRequest $request
     *
     * @return Response
     */
    public function store(CreatePrescricaoRequest $request)
    {
        $input = $request->all();

        $prescricao = $this->prescricaoRepository->create($input);

        Flash::success('Prescricao saved successfully.');

        return redirect(route('prescricaos.index'));
    }

    /**
     * Display the specified Prescricao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prescricao = $this->prescricaoRepository->findWithoutFail($id);

        if (empty($prescricao)) {
            Flash::error('Prescricao not found');

            return redirect(route('prescricaos.index'));
        }

        return view('prescricaos.show')->with('prescricao', $prescricao);
    }

    /**
     * Show the form for editing the specified Prescricao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prescricao = $this->prescricaoRepository->findWithoutFail($id);

        if (empty($prescricao)) {
            Flash::error('Prescricao not found');

            return redirect(route('prescricaos.index'));
        }

        return view('prescricaos.edit')->with('prescricao', $prescricao);
    }

    /**
     * Update the specified Prescricao in storage.
     *
     * @param  int              $id
     * @param UpdatePrescricaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrescricaoRequest $request)
    {
        $prescricao = $this->prescricaoRepository->findWithoutFail($id);

        if (empty($prescricao)) {
            Flash::error('Prescricao not found');

            return redirect(route('prescricaos.index'));
        }

        $prescricao = $this->prescricaoRepository->update($request->all(), $id);

        Flash::success('Prescricao updated successfully.');

        return redirect(route('prescricaos.index'));
    }

    /**
     * Remove the specified Prescricao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prescricao = $this->prescricaoRepository->findWithoutFail($id);

        if (empty($prescricao)) {
            Flash::error('Prescricao not found');

            return redirect(route('prescricaos.index'));
        }

        $this->prescricaoRepository->delete($id);

        Flash::success('Prescricao deleted successfully.');

        return redirect(route('prescricaos.index'));
    }
}
