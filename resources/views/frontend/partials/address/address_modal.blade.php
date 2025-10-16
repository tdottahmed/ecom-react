<!-- New Address Modal -->
<div class="modal fade" id="new-address-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ translate('New Address') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-default" role="form" action="{{ route('addresses.store') }}" method="POST">
        @csrf
        <div class="modal-body c-scrollbar-light">
          <div class="p-3">
            <!-- Address -->
            <div class="row">
              <div class="col-md-2">
                <label>{{ translate('Address') }}</label>
              </div>
              <div class="col-md-10">
                <textarea class="form-control rounded-0 mb-3" placeholder="{{ translate('Your Address') }}" rows="2"
                          name="address" required></textarea>
              </div>
            </div>

            <!-- Country -->
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
                <select class="form-control aiz-selectpicker rounded-0 mb-3" data-live-search="true" name="state_id"
                        required>
                  <option value="" disabled>{{ translate('Select your state') }}</option>
                  @foreach (get_active_states($defaultCountry->id) as $key => $state)
                    <option value="{{ $state->id }}" {{ $state->code == 'BD' ? 'selected' : '' }}>
                      {{ $state->name }}
                    </option>
                  @endforeach
                </select>
              </div>
            </div>

            <!-- City -->
            <div class="row">
              <div class="col-md-2">
                <label>{{ translate('City') }}</label>
              </div>
              <div class="col-md-10">
                <select class="form-control aiz-selectpicker rounded-0 mb-3" data-live-search="true" name="city_id"
                        required>

                </select>
              </div>
            </div>

            @if (get_setting('google_map') == 1)
              <!-- Google Map -->
              <div class="row mb-3 mt-3">
                <input id="searchInput" class="controls" type="text"
                       placeholder="{{ translate('Enter a location') }}">
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
                  <input type="text" class="form-control rounded-0 mb-3" id="longitude" name="longitude"
                         readonly="">
                </div>
              </div>
              <!-- Latitude -->
              <div class="row">
                <div class="col-md-2" id="">
                  <label for="exampleInputuname">{{ translate('Latitude') }}</label>
                </div>
                <div class="col-md-10" id="">
                  <input type="text" class="form-control rounded-0 mb-3" id="latitude" name="latitude"
                         readonly="">
                </div>
              </div>
            @endif

            <!-- Postal code -->
            <div class="row">
              <div class="col-md-2">
                <label>{{ translate('Postal code') }}</label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control rounded-0 mb-3"
                       placeholder="{{ translate('Your Postal Code') }}" name="postal_code" value="" required>
              </div>
            </div>

            <!-- Phone -->
            <div class="row mb-3">
              <div class="col-md-2">
                <label>{{ translate('Phone') }}</label>
              </div>
              <div class="col-md-10">
                <input type="tel" id="phone-code" class="form-control rounded-0" placeholder="" name="phone"
                       autocomplete="off" required>
                <input type="hidden" name="country_code" value="">
              </div>
            </div>

            <!-- Save button -->
            <div class="form-group text-right">
              <button type="submit" class="btn btn-primary rounded-0 w-150px">{{ translate('Save') }}</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Address Modal -->
<div class="modal fade" id="edit-address-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ translate('New Address') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body c-scrollbar-light" id="edit_modal_body">

      </div>
    </div>
  </div>
</div>
