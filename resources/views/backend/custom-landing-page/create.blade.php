@extends('backend.layouts.app')

@section('content')
    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h3">{{ translate('Add Custom Landing Page') }}</h1>
            </div>
        </div>
    </div>

    <div class="card">
        <form class="p-4" action="{{ route('custom-landing-pages.store') }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="slug" name="slug" value="{{ old('slug') }}">
            {{-- 🔹 Global error alert --}}
            @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul class="mb-0 pl-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card-header px-0">
                <h6 class="fw-600 mb-0">{{ translate('Page Content') }}</h6>
            </div>

            <div class="card-body px-0">
                <!-- Title -->
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{ translate('Page Title') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title"
                               value="{{ old('title') }}" placeholder="{{ translate('Enter Page Title') }}" required>
                        @error('title')
                        <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <!-- URL -->
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{ translate('URL') }} <span
                            class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-text">{{ route('home') }}/landing/</span>
                            <input type="text" class="form-control" id="url" name="url"
                                   value="{{ old('url') }}" placeholder="{{ translate('auto-generated-url') }}" readonly
                                   required>
                        </div>
                        <small
                            class="form-text text-muted">{{ translate('This will be auto-generated based on the title') }}</small>
                        @error('url')
                        <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <!-- Product -->
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{ translate('Product') }} <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select class="form-control aiz-selectpicker" name="product_id" data-live-search="true"
                                required>
                            <option value="">{{ translate('Select a product') }}</option>
                            @foreach($products as $product)
                                <option
                                    value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                    {{ $product->name }} ({{ $product->slug }})
                                </option>
                            @endforeach
                        </select>
                        <small
                            class="form-text text-muted">{{ translate('Select the product for this landing page') }}</small>
                        @error('product_id')
                        <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <!-- Content -->
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{ translate('Content') }} <span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                    <textarea class="aiz-text-editor form-control" placeholder="{{ translate('Write page content..') }}"
                              data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul","ol","paragraph"]],["style",["style"]],["color",["color"]],["table",["table"]],["insert",["link","picture","video"]],["view",["fullscreen","codeview","undo","redo"]]]'
                              data-min-height="300" name="content" required>{{ old('content') }}</textarea>
                        @error('content')
                        <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <!-- Active -->
                <div class="form-group row mb-0">
                    <label class="col-sm-2 col-from-label">{{ translate('Active') }}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="is_active"
                                   value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="text-right mt-3">
                    <button type="submit" class="btn btn-primary">{{ translate('Create Page') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')        // Replace spaces with -
                .replace(/[^\w\-]+/g, '')    // Remove all non-word chars
                .replace(/\-\-+/g, '-')      // Replace multiple - with single -
                .replace(/^-+/, '')          // Trim - from start
                .replace(/-+$/, '');         // Trim - from end
        }

        $(document).ready(function () {
            $('#title').on('keyup change', function () {
                let slug = slugify($(this).val());
                $('#url').val(slug);
                $('#slug').val(slug);
            });
        });
    </script>
@endpush
