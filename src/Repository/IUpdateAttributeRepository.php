<?php


namespace Murattcann\UpdateModal\Repository;




use Illuminate\Http\Request;

interface IUpdateAttributeRepository
{

    public function baseQuery();

    public function getById(int $id);

    public function update(Request $request, int $id);

}
