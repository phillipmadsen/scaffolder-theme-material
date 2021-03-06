@extends('layouts.edit')

@section('breadcrumb')

    <a href="/{{route_prefix}}/{{breadcrumb_lw}}" class="teal-text">{{breadcrumb}}</a> / {{ $model->{{primaryKey}} }} / Edit

@endsection

@section('form-content')

    {{fields}}
@endsection

@push('scripts')

    <script>
        $('form').submit(function(event){
            event.preventDefault();

            $.ajax({
                url: '/{{route_prefix}}/{{class_name_lw}}/{{ $model->{{primaryKey}} }}',
                type: 'PUT',
                data: $('form').serialize()
            })
            .done(function(response) {
                window.location = "/{{route_prefix}}/{{breadcrumb_lw}}";
            })
            .fail(function(response) {
                Materialize.toast('Error: ' + response.statusText, 4000);
                console.log(response);
            });
        });

        $('.datepicker').pickadate({
            selectMonths: true,
            selectYears: 15,
            hiddenName: true,
            formatSubmit: 'yyyy/mm/dd'
        });
    </script>

@endpush