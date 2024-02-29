@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="v-userList">
        <p> @{{ message }} </p>
    </div>
@stop

@section('js')
    <script>
        Vue.createApp({
            data() {
                return {
                    message: "hello i`am form vue",
                }
            },
        }).mount("#v-userList")

    </script>
@stop
