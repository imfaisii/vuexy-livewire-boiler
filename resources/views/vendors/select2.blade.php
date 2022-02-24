@push('extended-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
@endpush

@push('extended-js')

    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script>
        $(function() {

            var select = $('.select2');
            select.each(function() {
                var $this = $(this);
                $this.wrap('<div class="position-relative"></div>');
                $this.select2({
                    placeholder: $(this).data('placeholder'),
                    dropdownAutoWidth: true,
                    width: '100%',
                    dropdownParent: $this.parent(),
                });
            });
        });
    </script>

@endpush
