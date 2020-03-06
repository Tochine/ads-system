<?php

namespace App\Http\Controllers\Repository;

use App\Http\Requests\Repository\AdvertRequest;
use App\Interfaces\Repository\AdvertInterface;
use Shamaseen\Repository\Generator\Utility\Controller;
use App\Repositories\Repository\AdvertRepository;

/**
 * Class AdvertController
 * @package App\Http\Controllers\Repository
 * @property-read AdvertInterface $interface
 */
class AdvertController extends Controller
{

    protected $routeIndex = 'adverts';

    protected $pageTitle = 'Advert';
    protected $createRoute = 'adverts.create';

    //protected $viewIndex = 'adverts.index';
    protected $viewCreate = 'adverts.create';
    protected $viewEdit = 'adverts.edit';
    protected $viewShow = 'adverts.show';
    private $advertRepository;

    /**
     * AdvertController constructor.
     * @param AdvertInterface $interface
     * @param AdvertRequest $request
     */
    public function __construct(AdvertInterface $advertRepository, AdvertRequest $request)
    {
       // parent::__construct($interface, $request);
       $this->advertRepository = $advertRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adverts = $this->advertRepository->all();
        return $adverts;
        //return view('adverts.index', compact('adverts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return parent::create();
        return view('adverts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return parent::store();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($advert)
    {
        $advert = $this->advertRepository->findById($advert);
        return $advert;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return parent::edit($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($advert)
    {
       $this->advertRepository->updateById($advert);
       return redirect('adverts/'.$advert);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($advert)
    {
        $this->advertRepository->deleteById($advert);
        return redirect('adverts');
    }
}
