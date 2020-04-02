<?php


namespace Murattcann\UpdateModal\Helpers;


class HtmlGenerator
{
    //TODO: generator functions will be developed to pass modal and button to index pages.

    public static function generateButton($item,$route, $attributeName, $attributeValue, $buttonTitle)
    {
        $buttonAttributes = [
            "item" => $item,
            "route" => $route,
            "attributeName" => $attributeName,
            "attributeValue" => $attributeValue,
            "buttonTitle" => $buttonTitle
        ];

        return view('UpdateModal::button.button')->with($buttonAttributes);
    }

    public static function generateModal(string $modalTitle)
    {
        $modalAttributes = [
            "modalTitle" => $modalTitle
        ];

       return view("UpdateModal::modal.modal")->with($modalAttributes)->render();
    }
}
