<script type="text/javascript">
  // =======================
  // ADDRESS FORM FUNCTIONS
  // =======================
  function submitShippingInfoForm(el) {
    var email = $("input[name='email']").val();
    var phone = $("input[name='country_code']").val() + $("input[name='phone']").val();

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ route('guest_customer_info_check') }}",
      type: 'POST',
      data: {
        email: email,
        phone: phone
      },
      success: function(response) {
        if (response == 1) {
          $('#login_modal').modal();
          AIZ.plugins.notify('warning',
            '{{ translate('You already have an account with this information. Please Login first.') }}');
        } else {
          $('#shipping_info_form').submit();
        }
      }
    });
  }

  function add_new_address() {
    $('#new-address-modal').modal('show');
  }

  function edit_address(address) {
    var url = '{{ route('addresses.edit', ':id') }}';
    url = url.replace(':id', address);

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: url,
      type: 'GET',
      success: function(response) {
        $('#edit_modal_body').html(response.html);
        $('#edit-address-modal').modal('show');
        AIZ.plugins.bootstrapSelect('refresh');

        @if (get_setting('google_map') == 1)
          var lat = -33.8688;
          var long = 151.2195;

          if (response.data.address_data.latitude && response.data.address_data.longitude) {
            lat = parseFloat(response.data.address_data.latitude);
            long = parseFloat(response.data.address_data.longitude);
          }

          initialize(lat, long, 'edit_');
        @endif
      }
    });
  }

  $(document).on('change', '[name=country_id]', function() {
    var country_id = $(this).val();
    get_states(country_id);
  });

  $(document).on('change', '[name=state_id]', function() {
    var state_id = $(this).val();
    get_city(state_id);
  });

  function get_states(country_id) {
    $('[name="state_id"]').html("");
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ route('get-state') }}",
      type: 'POST',
      data: {
        country_id: country_id
      },
      success: function(response) {
        var obj = JSON.parse(response);
        if (obj != '') {
          $('[name="state_id"]').html(obj);
          AIZ.plugins.bootstrapSelect('refresh');
        }
      }
    });
  }

  function get_city(state_id) {
    $('[name="city_id"]').html("");
    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: "{{ route('get-city') }}",
      type: 'POST',
      data: {
        state_id: state_id
      },
      success: function(response) {
        var obj = JSON.parse(response);
        if (obj != '') {
          $('[name="city_id"]').html(obj);
          AIZ.plugins.bootstrapSelect('refresh');
        }
      }
    });
  }

  // =======================
  // PHONE VALIDATION (BD ONLY, NO CDN)
  // =======================
  $(document).ready(function() {
    const modal = $('#new-address-modal');
    const form = modal.find('form.form-default');
    const phoneInput = form.find("input[name='phone']");
    const countryCodeInput = form.find("input[name='country_code']");

    // Default Bangladesh code
    countryCodeInput.val("88");

    // Create error message element
    const phoneError = $(
      '<small class="text-danger mt-1 d-none">❌ Invalid Bangladeshi phone number (format: 01XXXXXXXXX)</small>');

    // Insert error message BELOW the country code field
    countryCodeInput.after(phoneError);

    const bdPhoneRegex = /^(?:\+?88)?01[3-9]\d{8}$/;

    // Live input validation
    phoneInput.on("input", function() {
      const value = phoneInput.val().trim();

      if (value === "") {
        phoneError.addClass("d-none");
        phoneInput.removeClass("is-invalid is-valid");
        return;
      }

      if (!bdPhoneRegex.test(value)) {
        phoneError.removeClass("d-none");
        phoneInput.addClass("is-invalid").removeClass("is-valid");
      } else {
        phoneError.addClass("d-none");
        phoneInput.addClass("is-valid").removeClass("is-invalid");
      }
    });

    // Validate before form submission
    form.on("submit", function(e) {
      const value = phoneInput.val().trim();

      if (!bdPhoneRegex.test(value)) {
        e.preventDefault();
        phoneError.removeClass("d-none");
        phoneInput.addClass("is-invalid");
        AIZ.plugins.notify('danger', '{{ translate('Please enter a valid Bangladeshi phone number.') }}');
        return false;
      }

      // Automatically format phone with +880 if needed
      if (!value.startsWith("+88")) {
        phoneInput.val(value.replace(/^0/, "+880"));
      }
    });
  });
</script>
