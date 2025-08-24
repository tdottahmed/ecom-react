<!-- Modal for Confirmation -->
{{-- <div id="preorderConfirmation" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">{{translate('Preorder Confirmation')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1 fs-14" id="modal-text">{{translate('Are you sure to submit this change?')}}</p>
                
                <!-- Form to submit the change -->
                <form action="{{ route('seller.preorder-order.status_update', $order->id) }}" method="POST" id="confirmationForm">
                    @csrf
                    @method('PUT')

                    <!-- Hidden fields that will be dynamically set by JavaScript -->
                    <input type="hidden" id="preorder-status-name" name="preorder-status-name" value="1"> <!-- This will hold the stage value -->
                    <input type="hidden" id="preorder-status-value" name="status" value=""> <!-- This will hold the status value -->

                    <!-- Modal Buttons -->
                    <button type="button" class="btn btn-secondary rounded-0 mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                    <button type="submit" class="btn btn-primary rounded-0 mt-2">{{translate('Submit')}}</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}



<!-- Modal for Confirmation -->
<div id="preorderConfirmation" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">{{translate('Preorder Confirmation')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1 fs-14" id="modal-text">{{translate('Are you sure to submit this change?')}}</p>
                
                <!-- Form to submit the change -->
                <form action="{{ route('seller.preorder-order.status_update', $order->id) }}" method="POST" id="confirmationForm">
                    @csrf
                    @method('PUT')

                    <!-- Modal Buttons -->
                    <button type="button" class="btn btn-secondary rounded-0 mt-2" data-dismiss="modal">{{translate('Cancel')}}</button>
                    <button type="button" class="btn btn-primary rounded-0 mt-2" onclick="confirmPreorder()">{{translate('Submit')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
