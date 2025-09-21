<div class="shipment-history">
    <h6 class="mb-3">{{ translate('Shipment History') }} - Order #{{ $order->code }}</h6>

    <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th>{{ translate('Date') }}</th>
                <th>{{ translate('Invoice No') }}</th>
                <th>{{ translate('Consignment No') }}</th>
                <th>{{ translate('Tracking Code') }}</th>
                <th>{{ translate('Carrier') }}</th>
                <th>{{ translate('Status') }}</th>
                <th>{{ translate('Recipient') }}</th>
                <th>{{ translate('Note') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($shipments as $shipment)
                <tr>
                    <td>{{ $shipment->created_at->format('M d, Y H:i') }}</td>
                    <td>{{ $shipment->invoice_no ?? 'N/A' }}</td>
                    <td>{{ $shipment->consignment_no ?? 'N/A' }}</td>
                    <td>
                        @if($shipment->tracking_code)
                            <a href="#" class="tracking-link" data-code="{{ $shipment->tracking_code }}">
                                {{ $shipment->tracking_code }}
                            </a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $shipment->carrier ?? 'N/A' }}</td>
                    <td>
                        <span class="badge
                            @if($shipment->status == 'delivered') badge-success
                            @elseif($shipment->status == 'shipped') badge-info
                            @elseif($shipment->status == 'cancelled') badge-danger
                            @else badge-warning
                            @endif">
                            {{ ucfirst($shipment->status) }}
                        </span>
                    </td>
                    <td>
                        @if($shipment->recipient_name)
                            <div>{{ $shipment->recipient_name }}</div>
                            <small class="text-muted">{{ $shipment->recipient_phone }}</small>
                        @else
                            {{ translate('Not specified') }}
                        @endif
                    </td>
                    <td>
                        @if($shipment->note)
                            <button type="button" class="btn btn-xs btn-info" data-toggle="tooltip"
                                    title="{{ $shipment->note }}">
                                <i class="las la-info-circle"></i>
                            </button>
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @if($shipments->isEmpty())
        <p class="text-center text-muted">{{ translate('No shipment records found') }}</p>
    @endif
</div>
