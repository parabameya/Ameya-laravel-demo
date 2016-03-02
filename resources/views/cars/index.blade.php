
@extends('layouts.app')




@section('content')
<div class="container">
    <div class="content">
        <h3>Here you can see the cars which you own </h3>
        {{$cars}}
        <table class="table datatable" id="displayCarData">
        </table>
    </div>
</div>
@endsection

@section('page-script')
<script type="text/javascript">
    
</script>

@stop




