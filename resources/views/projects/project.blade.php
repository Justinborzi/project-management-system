@extends('layout')
<style>
    .p-container {
        display: grid;
        grid-template-columns: auto auto;
        grid-template-rows: auto auto;
        column-gap: 20px;
        width: auto;
        justify-content: space-evenly;
        margin: 5% 5%;
        row-gap: 60px;
    }

    .p-items {
        background: white;
        text-align: center;
        width: 280px;
    }
</style>
@section('content')
<div class="p-container">
    <div class="p-items" style="width: 1200px; padding: 10px; text-align: left; grid-row: span 2; max-height: 600px; overflow-y: auto;">
        <h1>{{$thisProject['project']}}</h1>
        <p>{{$thisProject['body']}}</p>
    </div>
    <div class="p-items">
        <h2>Project Stats</h2>
    </div>
    <div class="p-items">
        <h2>Authors</h2>
    </div>
</div>
<!-- TODO: Create Sections for projects; EG: Gallery, Extra Information, anything else I can think of -->
@endsection