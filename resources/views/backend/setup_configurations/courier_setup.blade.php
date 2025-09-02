@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ translate('Pathao Courier Setup') }}</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="PATHAO_BASE_URL">
                            <div class="col-lg-3">
                                <label class="col-from-label">{{ translate('Pathao Base URL') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="PATHAO_BASE_URL"
                                       value="{{ env('PATHAO_BASE_URL') }}"
                                       placeholder="{{ translate('Steadfast Base URL') }}"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="PATHAO_CLIENT_ID">
                            <div class="col-lg-3">
                                <label class="col-from-label">{{ translate('Pathao Client Id') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="PATHAO_CLIENT_ID"
                                       value="{{ env('PATHAO_CLIENT_ID') }}"
                                       placeholder="{{ translate('Pathao Client Id') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="PATHAO_CLIENT_SECRET">
                            <div class="col-lg-3">
                                <label class="col-from-label">{{ translate('Pathao Client Secret') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="PATHAO_CLIENT_SECRET"
                                       value="{{ env('PATHAO_CLIENT_SECRET') }}"
                                       placeholder="{{ translate('Pathao Client Secret') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="PATHAO_USERNAME">
                            <div class="col-lg-3">
                                <label class="col-from-label">{{ translate('Pathao Username') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="PATHAO_USERNAME"
                                       value="{{ env('PATHAO_USERNAME') }}"
                                       placeholder="{{ translate('Pathao Username') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="types[]" value="PATHAO_PASSWORD">
                            <div class="col-lg-3">
                                <label class="col-from-label">{{ translate('Pathao password') }}</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="PATHAO_PASSWORD"
                                       value="{{ env('PATHAO_PASSWORD') }}"
                                       placeholder="{{ translate('Pathao password') }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
                        </div>
                    </form>
                    <hr/>
                    <h5 class="mb-4 h6">{{ translate('Pathao Zone and Cities fetch') }}</h5>
                    <div class="d-flex justify-content-start gap-4">
                        <a href="#" class="btn btn-sm btn-primary d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M4 20v-2h2.75l-.4-.35q-1.3-1.15-1.825-2.625T4 12.05q0-2.775 1.662-4.938T10 4.25v2.1Q8.2 7 7.1 8.563T6 12.05q0 1.125.425 2.188T7.75 16.2l.25.25V14h2v6zm10-.25v-2.1q1.8-.65 2.9-2.212T18 11.95q0-1.125-.425-2.187T16.25 7.8L16 7.55V10h-2V4h6v2h-2.75l.4.35q1.225 1.225 1.788 2.663T20 11.95q0 2.775-1.662 4.938T14 19.75"/>
                            </svg>
                            Fetch Cities
                        </a>
                        <a href="#" class="btn btn-sm btn-secondary d-flex align-items-center mx-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M4 20v-2h2.75l-.4-.35q-1.3-1.15-1.825-2.625T4 12.05q0-2.775 1.662-4.938T10 4.25v2.1Q8.2 7 7.1 8.563T6 12.05q0 1.125.425 2.188T7.75 16.2l.25.25V14h2v6zm10-.25v-2.1q1.8-.65 2.9-2.212T18 11.95q0-1.125-.425-2.187T16.25 7.8L16 7.55V10h-2V4h6v2h-2.75l.4.35q1.225 1.225 1.788 2.663T20 11.95q0 2.775-1.662 4.938T14 19.75"/>
                            </svg>
                            Fetch Zones
                        </a>
                        <a href="#" class="btn btn-sm btn-info d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                      d="M4 20v-2h2.75l-.4-.35q-1.3-1.15-1.825-2.625T4 12.05q0-2.775 1.662-4.938T10 4.25v2.1Q8.2 7 7.1 8.563T6 12.05q0 1.125.425 2.188T7.75 16.2l.25.25V14h2v6zm10-.25v-2.1q1.8-.65 2.9-2.212T18 11.95q0-1.125-.425-2.187T16.25 7.8L16 7.55V10h-2V4h6v2h-2.75l.4.35q1.225 1.225 1.788 2.663T20 11.95q0 2.775-1.662 4.938T14 19.75"/>
                            </svg>
                            Fetch Specific area
                        </a>
                    </div>
                </div>
            </div>
        </div>

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
