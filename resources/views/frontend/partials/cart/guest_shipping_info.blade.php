<div class="p-3">
  <!-- Name -->
  <div class="row">
    <div class="col-md-2 mt-md-2">
      <label>{{ translate('Name') }} <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-10">
      <input class="form-control rounded-0 mb-3" placeholder="{{ translate('Your Name') }}" rows="2" name="name"
             required></input>
    </div>
  </div>

  <!-- Email -->
  <div class="row">
    <div class="col-md-2 mt-md-2">
      <label>{{ translate('Email') }} <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-10">
      <input type="email" class="form-control rounded-0 mb-3" placeholder="{{ translate('Your Email') }}"
             name="email" value="" required>
    </div>
  </div>

  <!-- Country -->
  {{-- <div class="row">
    <div class="col-md-2 mt-md-2">
      <label>{{ translate('Country') }} <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-10">
      <div class="mb-3">
        <select class="form-control aiz-selectpicker rounded-0"
                @if (get_setting('shipping_type') == 'carrier_wise_shipping') onchange="updateDeliveryAddress(this.value)" @endif
                data-live-search="true" data-placeholder="{{ translate('Select your country') }}" name="country_id"
                required>
          <option value="" disabled>{{ translate('Select your country') }}</option>
          @foreach (get_active_countries() as $key => $country)
            <option value="{{ $country->id }}" {{ $country->code == 'BD' ? 'selected' : '' }}>
              {{ $country->name }}
            </option>
          @endforeach
        </select>
      </div>
    </div>
  </div> --}}

  @php
    $defaultCountry = get_default_country();
  @endphp
  <input type="hidden" name="country_id" value="{{ $defaultCountry->id }}">

  <!-- State -->
  <div class="row">
    <div class="col-md-2 mt-md-2">
      <label>{{ translate('State/District') }} <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-10">
      <select class="form-control aiz-selectpicker rounded-0 mb-3" data-live-search="true" name="state_id" required>
        <option value="" selected disabled>{{ translate('Select your state') }}</option>
        @foreach (get_active_states($defaultCountry->id) as $key => $state)
          <option value="{{ $state->id }}">
            {{ $state->name }}
          </option>
        @endforeach
      </select>
    </div>
  </div>

  <!-- City -->
  <div class="row">
    <div class="col-md-2 mt-md-2">
      <label>{{ translate('City') }} <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-10">
      <select class="form-control aiz-selectpicker rounded-0 mb-3" data-live-search="true" name="city_id" required>

      </select>
    </div>
  </div>

  @if (get_setting('google_map') == 1)
    <!-- Google Map -->
    <div class="row mb-3 mt-3">
      <input id="searchInput" class="controls" type="text" placeholder="{{ translate('Enter a location') }}">
      <div id="map"></div>
      <ul id="geoData">
        <li style="display: none;">Full Address: <span id="location"></span></li>
        <li style="display: none;">Postal Code: <span id="postal_code"></span></li>
        <li style="display: none;">Country: <span id="country"></span></li>
        <li style="display: none;">Latitude: <span id="lat"></span></li>
        <li style="display: none;">Longitude: <span id="lon"></span></li>
      </ul>
    </div>
    <!-- Longitude -->
    <div class="row">
      <div class="col-md-2" id="">
        <label for="exampleInputuname">{{ translate('Longitude') }}</label>
      </div>
      <div class="col-md-10" id="">
        <input type="text" class="form-control rounded-0 mb-3" id="longitude" name="longitude" readonly="">
      </div>
    </div>
    <!-- Latitude -->
    <div class="row">
      <div class="col-md-2" id="">
        <label for="exampleInputuname">{{ translate('Latitude') }}</label>
      </div>
      <div class="col-md-10" id="">
        <input type="text" class="form-control rounded-0 mb-3" id="latitude" name="latitude" readonly="">
      </div>
    </div>
  @endif

  <!-- Postal code -->
  {{-- <div class="row">
    <div class="col-md-2 mt-md-2">
      <label>{{ translate('Postal code') }} <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-10">
      <input type="text" class="form-control rounded-0 mb-3" placeholder="{{ translate('Your Postal Code') }}"
             name="postal_code" value="" required>
    </div>
  </div> --}}

  <!-- Phone -->
  <div class="row">
    <div class="col-md-2 mt-md-2">
      <label>{{ translate('Phone') }} <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-10">
      <input type="tel" id="phone-code" class="form-control rounded-0" placeholder="" name="phone"
             autocomplete="off" required>
      <input type="hidden" name="country_code" value="">
    </div>
  </div>

  <!-- Address -->
  <div class="row mt-3">
    <div class="col-md-2 mt-md-2">
      <label>{{ translate('Address') }} <span class="text-danger">*</span></label>
    </div>
    <div class="col-md-10">
      <textarea class="form-control rounded-0 mb-3" placeholder="{{ translate('Your Address') }}" rows="2"
                name="address" required></textarea>
    </div>
  </div>
</div>

<div class="row px-3 pb-4 pt-3">
  <div class="col-md-2 mt-md-2"></div>
  <div class="col-md-10">
    <div class="bg-soft-info p-2">
      {{ translate('If you have already used the same mail address or phone number before, please ') }}
      <a href="javascript:void(0);" data-toggle="modal" data-target="#login_modal"
         class="fw-700 animate-underline-primary">{{ translate('Login') }}</a>
      {{ translate(' first to continue') }}
    </div>
  </div>
</div>
