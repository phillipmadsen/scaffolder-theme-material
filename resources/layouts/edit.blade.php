@extends('layouts.page-no-search')

@section('content')

    <form>

        @yield('form-content')

        <div class="col s12 center-align action-btn-margin">
            <button type="submit" class="waves-effect btn-flat">Update</button>
        </div>

    </form>

@endsection