<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(function () {

        let $modal, $form, $formData, $input, $inputType;
        let $id, $route, $tableCellToChange, $attributeValue, $attributeName;
        let $attributeTableRow, $newCellData;

        let $updateButton = $('#modal-update-button');

        $(document).on('click', '.edit-attribute-button', function () {


            $id    = $(this).data('id');
            $route = $(this).data('route');
            $form  = $('.edit-modal-form');
            $formData = $form.serializeArray();
            $modal = $('.edit-modal');

            $inputType = $(this).data('input-type');

            if($inputType === "textarea")
            {
                $('#edit-modal-textarea').show();

                $input = $('#edit-modal-textarea');
                $('#edit-modal-input').hide();
            }else{
                $('#edit-modal-input').show();
                $input = $('#edit-modal-input');
                $('#edit-modal-textarea').hide();
            }


            $tableCellToChange = $(this).data('table-cell');
            $attributeTableRow = $(this).closest("td");

            $attributeName = $(this).data('attribute-name');
            $attributeValue = $(this).data('attribute-value');

            $input.attr('name', $attributeName);
            $input.attr('type', $inputType);

            //Input title  as attribute name with capital first letter.
            $(".attribute-title").html($attributeName.charAt(0).toUpperCase() + $attributeName.substr(1).toLowerCase());

            $modal.modal();
            $input.val($attributeValue);

        });

        $($updateButton).on('click', (function () {

            console.log($formData);
            var $inputValue = $input.val();

            console.log('New Input Value: ' + $inputValue);
            $modal.modal('hide');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: $route,
                type: "POST",
                dataType: "json",
                cache: false,
                data: {
                    id: $id,
                    attributeName: $attributeName,
                    attributeValue: $inputValue,
                    _token:"{{csrf_token()}}",
                    _method: "POST"
                },
                success: function (response) {

                    $newCellData = reBuildButton($id, $route, $attributeName, $inputValue, $tableCellToChange);

                    $attributeTableRow.html($newCellData);

                    $modal.modal('hide');

                        toastr.options.closeButton = false;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.timeout=1000;
                        toastr.options.closeDuration = 1000;
                        toastr.success(response.message);


                },
                error: function () {
                    toastr.options.closeButton = false;
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 100;
                    toastr.error("Something went wrong");
                }
            });
        }));

        function reBuildButton($id, $route, $attributeName, $attributeValue, $tableCell) {
            var $_html = '';

            $_html += '<a href="javascript:void(0);" id="edit-modal-button-' + $id + '" class="pull-left mr-1 edit-attribute-button"';
            $_html += ' data-id="' + $id + '"';
            $_html += ' data-route="' + $route + '"';
            $_html += ' data-attribute-name="' + $attributeName + '"';
            $_html += ' data-attribute-value="' + $attributeValue + '"';
            $_html += ' data-table-cell="' + $tableCell + '">';
            $_html +=  $attributeValue;
            $_html += '</a> ';

            console.log("function ID: " + $id);
            console.log("function Value: " + $attributeValue);

            return $_html;
        }
    });

</script>
