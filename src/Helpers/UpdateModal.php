<?php


namespace Murattcann\UpdateModal\Helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Murattcann\UpdateModal\Repository\UpdateAttribureRepository;

class UpdateModal
{
    private  $model = null;
    private  $repository = null;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->repository = new UpdateAttribureRepository($this->model);
    }

   /* public function setModel(Model $model){
        return $this->model = $model;
    }
    public  function getModel(){

        return $this->model ;
    }
    public function setRepository(Model $model){

        return $this->repository = new UpdateAttribureRepository($this->getModel());
    }

    public  function getRepository(){

        return $this->repository;
    }*/

    public   function update(Request $request, $id){
        return  $this->repository->update($request, $id);

    }
}
