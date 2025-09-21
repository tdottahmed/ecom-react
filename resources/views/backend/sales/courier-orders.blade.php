@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <form class="" action="" id="sort_orders" method="GET">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-md-0 h6">{{ translate('All Orders') }}</h5>
                </div>

                @canany(['delete_order', 'export_order'])
                    <div class="dropdown mb-2 mb-md-0">
                        <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">
                            {{ translate('Bulk Action') }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @can('delete_order')
                                <a class="dropdown-item confirm-alert" href="javascript:void(0)"
                                   data-target="#bulk-delete-modal">{{ translate('Delete selection') }}</a>
                            @endcan
                            @can('export_order')
                                <a class="dropdown-item" href="javascript:void(0)"
                                   onclick="order_bulk_export()">{{ translate('Export') }}</a>
                            @endcan
                        </div>
                    </div>
                @endcan
                @if(Route::currentRouteName() == 'offline_payment_orders.index')
                    <div class="col-lg-2 ml-auto">
                        <select class="form-control aiz-selectpicker" name="order_type" id="order_type">
                            <option value="">{{ translate('Filter by Order Type') }}</option>
                            <option value="inhouse_orders"
                                    @if ($order_type == 'inhouse_orders') selected @endif>{{ translate('Inhouse Orders') }}</option>
                            <option value="seller_orders"
                                    @if ($order_type == 'seller_orders') selected @endif>{{ translate('Seller Orders') }}</option>
                        </select>
                    </div>
                @endif

                <div class="col-lg-2">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" id="search"
                               name="search" @isset($sort_search) value="{{ $sort_search }}" @endisset
                               placeholder="{{ translate('Type Order code & hit Enter') }}">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">{{ translate('Filter') }}</button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                    <tr>
                        @if (auth()->user()->can('delete_order') || auth()->user()->can('export_order'))
                            <th>
                                <div class="form-group">
                                    <div class="aiz-checkbox-inline">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" class="check-all">
                                            <span class="aiz-square-check"></span>
                                        </label>
                                    </div>
                                </div>
                            </th>
                        @else
                            <th data-breakpoints="lg">#</th>
                        @endif

                        <th>{{ translate('Order Code') }}</th>
                        <th data-breakpoints="md">{{ translate('Num. of Products') }}</th>
                        <th data-breakpoints="md">{{ translate('Customer') }}</th>
                        <th data-breakpoints="md">{{ translate('Seller') }}</th>
                        <th data-breakpoints="md">{{ translate('Amount') }}</th>
                        <th data-breakpoints="md">{{ translate('Delivery Status') }}</th>
                        <th data-breakpoints="md">{{ translate('Payment method') }}</th>
                        <th data-breakpoints="md">{{ translate('Payment Status') }}</th>
                        <th data-breakpoints="md">{{ translate('Shipment Status') }}</th>
                        <th data-breakpoints="md">{{ translate('Tracking Info') }}</th>
                        <th data-breakpoints="md">{{ translate('User Delivery History') }}</th>
                        @if (addon_is_activated('refund_request'))
                            <th>{{ translate('Refund') }}</th>
                        @endif
                        <th class="text-right" width="15%">{{ translate('options') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $key => $order)
                        <tr>
                            @if (auth()->user()->can('delete_order') || auth()->user()->can('export_order'))
                                <td>
                                    <div class="form-group">
                                        <div class="aiz-checkbox-inline">
                                            <label class="aiz-checkbox">
                                                <input type="checkbox" class="check-one" name="id[]"
                                                       value="{{ $order->id }}">
                                                <span class="aiz-square-check"></span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            @else
                                <td>{{ $key + 1 + ($orders->currentPage() - 1) * $orders->perPage() }}</td>
                            @endif
                            <td>
                                {{ $order->code }}
                                @if ($order->viewed == 0)
                                    <span class="badge badge-inline badge-info">{{ translate('New') }}</span>
                                @endif
                                @if (addon_is_activated('pos_system') && $order->order_from == 'pos')
                                    <span class="badge badge-inline badge-danger">{{ translate('POS') }}</span>
                                @endif
                            </td>
                            <td>
                                {{ count($order->orderDetails) }}
                            </td>
                            <td>
                                @if ($order->user != null)
                                    {{ $order->user->name }}
                                @else
                                    Guest ({{ $order->guest_id }})
                                @endif
                            </td>
                            <td>
                                @if ($order->shop)
                                    {{ $order->shop->name }}
                                @else
                                    {{ translate('Inhouse Order') }}
                                @endif
                            </td>
                            <td>
                                {{ single_price($order->grand_total) }}
                            </td>
                            <td>
                                @if($order->delivery_status=='pending')
                                    <button type="button" class="btn btn-soft-success btn-sm"
                                            onclick="showCourierModal({{ $order->id }})">
                                        <i class="las la-check"></i>
                                        Courier now
                                    </button>
                                @else
                                    {{ translate(ucfirst(str_replace('_', ' ', $order->delivery_status))) }}
                                @endif
                            </td>
                            <td>
                                {{ translate(ucfirst(str_replace('_', ' ', $order->payment_type))) }}
                            </td>
                            <td>
                                @if ($order->payment_status == 'paid')
                                    <span class="badge badge-inline badge-success">{{ translate('Paid') }}</span>
                                @else
                                    <span class="badge badge-inline badge-danger">{{ translate('Unpaid') }}</span>
                                @endif
                            </td>
                            <td>
                                @if($order->has('orderShipment'))
                                    @php
                                        $latestShipment = $order->orderShipment;
                                    @endphp
                                    <span class="badge badge-inline
                                        @if($latestShipment->status == 'delivered') badge-success
                                        @elseif($latestShipment->status == 'shipped') badge-info
                                        @elseif($latestShipment->status == 'cancelled') badge-danger
                                        @else badge-warning
                                        @endif">
                                        {{ ucfirst($latestShipment->status) }}
                                    </span>
                                    <small class="d-block">{{ $latestShipment->created_at->format('M d, Y') }}</small>

                                @else
                                    <span
                                        class="badge badge-inline badge-secondary">{{ translate('Not Shipped') }}</span>
                                @endif
                            </td>

                            <td>
                                @if($order->fraudCheckHistory)
                                    <span>
                                        Checked: {{ $order->fraudCheckHistory->total_orders }} orders
                                        ({{ $order->fraudCheckHistory->success_rate }}% success)
                                    </span>
                                @else
                                    <a href="{{ route('order.checkFraud', $order->id) }}"
                                       class="btn btn-soft-info btn-sm">
                                        Check Histories
                                        <i class="las la-universal-access"></i>
                                    </a>
                                @endif
                            </td>
                            <td class="text-right">
                                @if (addon_is_activated('pos_system') && $order->order_from == 'pos')
                                    <a class="btn btn-soft-success btn-icon btn-circle btn-sm"
                                       href="{{ route('admin.invoice.thermal_printer', $order->id) }}" target="_blank"
                                       title="{{ translate('Thermal Printer') }}">
                                        <i class="las la-print"></i>
                                    </a>
                                @endif
                                @can('view_order_details')
                                    @php
                                        $order_detail_route = route('orders.show', encrypt($order->id));
                                        if (Route::currentRouteName() == 'seller_orders.index') {
                                            $order_detail_route = route('seller_orders.show', encrypt($order->id));
                                        } elseif (Route::currentRouteName() == 'pick_up_point.index') {
                                            $order_detail_route = route('pick_up_point.order_show', encrypt($order->id));
                                        }
                                        if (Route::currentRouteName() == 'inhouse_orders.index') {
                                            $order_detail_route = route('inhouse_orders.show', encrypt($order->id));
                                        }
                                    @endphp
                                    <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                       href="{{ $order_detail_route }}" title="{{ translate('View') }}">
                                        <i class="las la-eye"></i>
                                    </a>
                                @endcan
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm"
                                   href="{{ route('invoice.download', $order->id) }}"
                                   title="{{ translate('Download Invoice') }}">
                                    <i class="las la-download"></i>
                                </a>

                                @can('delete_order')
                                    <a href="#"
                                       class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                       data-href="{{ route('orders.destroy', $order->id) }}"
                                       title="{{ translate('Delete') }}">
                                        <i class="las la-trash"></i>
                                    </a>
                                @endcan
                            </td>
                        </tr>

                        <!-- Expanded row for shipment history -->
                        <tr class="expandable-row d-none" id="shipment-history-{{ $order->id }}">
                            <td colspan="100%">
                                <div class="px-4 py-3 bg-light">
                                    <h6 class="mb-3">{{ translate('Shipment History') }} - Order
                                        #{{ $order->code }}</h6>

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
                                                <th>{{ translate('Actions') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order->orderShipment() as $shipment)
                                                <tr>
                                                    <td>{{ $shipment->created_at->format('M d, Y H:i') }}</td>
                                                    <td>{{ $shipment->invoice_no ?? 'N/A' }}</td>
                                                    <td>{{ $shipment->consignment_no ?? 'N/A' }}</td>
                                                    <td>{{ $shipment->tracking_code ?? 'N/A' }}</td>
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
                                                            <small
                                                                class="text-muted">{{ $shipment->recipient_phone }}</small>
                                                        @else
                                                            {{ translate('Not specified') }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                           class="btn btn-sm btn-primary">
                                                            {{ translate('Edit') }}
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3">
                                        <a href="{{ route('shipments.create', ['order_id' => $order->id]) }}"
                                           class="btn btn-success btn-sm">
                                            <i class="las la-plus"></i> {{ translate('Add New Shipment') }}
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="aiz-pagination">
                    {{ $orders->appends(request()->input())->links() }}
                </div>

            </div>
        </form>
    </div>
@endsection

@section('modal')
    <!-- Delete modal -->
    @include('modals.delete_modal')

    <!-- Bulk Delete modal -->
    @include('modals.bulk_delete_modal')

@endsection

@section('script')
    <script>
        // Function to show/hide shipment history
        function toggleShipmentHistory(orderId) {
            $(`#shipment-history-${orderId}`).toggleClass('d-none');
        }

        // Function to show shipment history in modal
        function showShipmentHistory(orderId) {
            $.ajax({
                url: '{{ route("orders.shipments", ":orderId") }}'.replace(':orderId', orderId),
                type: 'GET',
                success: function (response) {
                    $('#shipmentHistoryContent').html(response);
                    $('#shipmentHistoryModal').modal('show');
                },
                error: function (xhr) {
                    AIZ.plugins.notify('danger', '{{ translate("Error loading shipment history") }}');
                }
            });
        }

        // Initialize table with expandable rows
        $(document).ready(function () {
            $('.expandable-row').hide();

            // Handle row expansion
            $('.toggle-expansion').on('click', function () {
                const orderId = $(this).data('order-id');
                $(`#shipment-history-${orderId}`).slideToggle();
            });
        });
    </script>
@endsection
