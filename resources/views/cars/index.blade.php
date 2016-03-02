

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <div class="title">This is a view for Cars Data </div>
        <button type="button" onClick="posttest();" class="btn btn-warning btn-xs">Hello</button>
    </div>
</div>
@endsection


@section('script')
<script>
    
console.log('works');
    public function posttest() {
        alert('cleic');
    }

</script>
@stop