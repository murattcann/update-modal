<?php


namespace Murattcann\UpdateModal\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UpdateAttribureRepository implements IUpdateAttributeRepository
{
    private $model = null;
    private $attribute;

    public function __construct(Model $model)
    {
        $this->model  = $model;
    }

    public function baseQuery()
    {
        return $this->model::query();
    }

    public function getById(int $id)
    {
        return $this->baseQuery()->where('id', $id)->first();
    }

    public function update(Request $request, int $id){


        $item = $this->getById($id);
        $attributeName  = $request->get('attributeName');
        $attributeValue = $request->get("attributeValue");

        $item->update(["$attributeName" => $attributeValue]);

        return $item;
    }


}
