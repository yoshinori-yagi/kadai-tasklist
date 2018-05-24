@extends('layouts.app')

@section('content')

<h1>たすく新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'たすく:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('作成') !!}

    {!! Form::close() !!}

@endsection