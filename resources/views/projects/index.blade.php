@extends('layout')

<style>
    body {
        background: cornflowerblue;
    }

    .container {
        margin-top: 20px;
        width: 100%;
        display: flex;
    }

    .container a {
        margin-left: 20px;
        text-decoration: none;
    }

    .item {
        border: 2px solid white;
        color: black;
        text-decoration: none;
        padding: 10px;
        box-shadow: 0px 2px 3px 2px #00000054;
        background: white;
        max-width: 420px;
        max-height: 165px;
    }

    .item table {
        height: 125px;
    }

    .item table tr > .title {
        font-size: 20px;
        font-weight: 600;
        color: black;
        text-decoration: none;
    }

    .item ul {
        padding-left: 5px;
        list-style: none;
        margin: 5px -10px;
        display: inline-flex;
        justify-self: left;
    }

    .item ul li {
        width: fit-content;
        min-width: 35px;
        background: lightblue;
        padding: 5px;
        border-radius: 20px;
        text-align: center;
        color: white;
        margin: 5px;
    }
</style>

@section('content')
    <div class="container">
        @foreach ($projects as $item)
            <a href="{{env("APP_FULL_URl")}}/projects/p/{{$item['id']}}">    
                <div class="item">
                    <table>
                        <tr>
                            <td class="title">{{$item['project']}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">{{$item['preview_text']}}</td>
                        </tr>

                    </table>
                    <ul>
                        @foreach (json_decode($item['tags']) as $tag)
                            @foreach ($tag as $itemTag)
                                <li>{{$itemTag}}</li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </a>
        @endforeach
    </div>    
@endsection
