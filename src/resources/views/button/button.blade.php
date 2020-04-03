
<a href="javascript:void(0);"
   id="edit-modal-button-{{$item->id}}"
   class="pull-left mr-1 edit-attribute-button"
   data-id="{{$item->id}}"
   data-attribute-name="{{$attributeName}}"
   data-attribute-value="{{$attributeValue}}"
   data-route = "{{$route}}"
   data-input-type="{{ $inputType }}"
   data-method="PUT"
>

    {{$buttonTitle}}
</a>
