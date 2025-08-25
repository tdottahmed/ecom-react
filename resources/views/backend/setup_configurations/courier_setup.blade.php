@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Steadfast Courier Setup') }}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="STEADFAST_BASE_URL">
                            <div class="col-lg-3">
                                <label class="col-from-label">{{ translate('Steadfast Base URL') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="STEADFAST_BASE_URL"
                                       value="{{ env('STEADFAST_BASE_URL') }}"
                                       placeholder="{{ translate('Steadfast Base URL') }}"
                                       required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="STEADFAST_API_KEY">
                            <div class="col-lg-3">
                                <label class="col-from-label">{{ translate('Steadfast Api key') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="STEADFAST_API_KEY"
                                       value="{{ env('STEADFAST_API_KEY') }}"
                                       placeholder="{{ translate('Steadfast Api key') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="STEADFAST_SECRET_KEY">
                            <div class="col-lg-3">
                                <label class="col-from-label">{{ translate('Steadfast Secret key') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="STEADFAST_SECRET_KEY"
                                       value="{{ env('STEADFAST_SECRET_KEY') }}"
                                       placeholder="{{ translate('Steadfast Secret key') }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
