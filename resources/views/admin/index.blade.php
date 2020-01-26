@extends('layout')

@section('content')
<style>

    html, body {
        background: none;
    }

    @media only screen and (min-width: 768px) {
        html, body {
            background: rgb(69, 0, 127);
        }

        header {
            position: sticky;
            top: 0;
            float: right;
            display: inline-flex;
            width: 86%;
            color: white;
            border-bottom: 2px solid #0000004d;
            justify-content: center;
            z-index: 10;
        }

        aside {
            background: rgb(39, 39, 39);
            width: 14%;
            height: 100%;
            float: left;
        }

        table {
            width: 100%;
            margin-top: 10px;
        }

        aside div {
            height: 55px;
            padding: 0;
            margin: 0;
            width: 100%;
            border-bottom: 1px solid white;
        }

        h2 {
            margin: 0;
            line-height: 50px;
            height: 100%;
            padding-top: 0px;
            width: 100%;
            text-align: center;
            color: white;
        }

        .fa {
            color: darkorchid;
        }
    }
</style>

<aside>
    <div>
        <h2>Hello World!</h2>
    </div>
    <table>
        <tr>
            <td><i class="fa fa-home" aria-hidden="true"></i></td>
            <td>Home</td>
        </tr>
        <tr>
            <td><i class="fa fa-lock" aria-hidden="true"></i></td>
            <td>Roles</td>
        </tr>
        <tr>
            <td><i class="fa fa-users" aria-hidden="true"></i></td>
            <td>Users</td>
        </tr>
        <tr>
            <td><i class="fa fa-folder" aria-hidden="true"></i></td>
            <td>Projects</td>
        </tr>
        <tr>
            <td><i class="fa fa-question" aria-hidden="true"></i></td>
            <td>Blog</td>
        </tr>
        <tr>
            <td><i class="fa fa-cogs" aria-hidden="true"></i></td>
            <td>Server Settings</td>
        </tr>
    </table>
</aside>

<div>
    @yield('adminContent')
</div>

@endsection