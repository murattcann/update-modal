<div class="modal fade edit-modal"  id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="service-priority-modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$modalTitle}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="edit-modal-form">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label class="form-label attribute-title">Edit</label>
                            <textarea name="" id="edit-modal-textarea"  class="form-control edit-modal-input"></textarea>
                            <input type="text" min="0" name="" id="edit-modal-input"  class="form-control edit-modal-input" value="" >

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary modal-update-button" id="modal-update-button" model-id=""><i class="fa fa-save"></i>  Update</button>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->





{{--<script src="{{ \Murattcann\UpdateModal\AssetHelper::modalAsset("js/update-modal.js")}}"></script>--}}
