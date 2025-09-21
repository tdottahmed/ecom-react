@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h3">{{ translate('Edit Custom Landing Page') }}</h1>
            </div>
        </div>
    </div>

    <div class="card">
        <form class="p-4" action="{{ route('custom-landing-pages.update', $page->id) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="hidden" name="lang" value="{{ $lang }}">

            <div class="card-header px-0">
                <h6 class="fw-600 mb-0">{{ translate('Page Content') }}</h6>
            </div>

            <div class="card-body px-0">
                <!-- Title -->
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{ translate('Title') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title"
                               value="{{ $page->getTranslation('title',$lang) }}" required>
                    </div>
                </div>

                <!-- Slug -->
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{ translate('Slug') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-text">{{ route('home') }}/landing/</span>
                            <input type="text" class="form-control" name="slug" value="{{ $page->slug }}" required>
                        </div>
                        <small
                            class="form-text text-muted">{{ translate('Use only letters, numbers, and hyphens.') }}</small>
                    </div>
                </div>

                <!-- Content -->
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{ translate('Content') }} <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                    <textarea class="aiz-text-editor form-control" name="content" required
                              data-buttons='[["font", ["bold","underline","italic","clear"]],["para",["ul","ol","paragraph"]],["insert",["link","picture","video"]],["view",["fullscreen","codeview","undo","redo"]]]'
                              data-min-height="300">{!! $page->getTranslation('content',$lang) !!}</textarea>
                    </div>
                </div>

                <!-- Product -->
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{ translate('Product') }}</label>
                    <div class="col-sm-10">
                        <select class="form-control aiz-selectpicker" name="product_id" data-live-search="true"
                                required>
                            <option value="">{{ translate('Select a product') }}</option>
                            @foreach($products as $product)
                                <option
                                    value="{{ $product->id }}" {{ $page->product_id == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }} ({{ $product->slug }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Active -->
                <div class="form-group row mb-0">
                    <label class="col-sm-2 col-from-label">{{ translate('Active') }}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="is_active" value="1" {{ $page->is_active ? 'checked' : '' }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-primary">{{ translate('Update Page') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
