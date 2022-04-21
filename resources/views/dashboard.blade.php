<x-app-layout>

    {{-- @include('vendors.charts') --}}
    {{-- @include('vendors.e-commerce-dash') --}}

    @section('content')
        <section id="dashboard-ecommerce">
            @livewire('dashboard.sections.first-section')
        </section>
    @endsection
</x-app-layout>
