@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} たすくの詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>すてーたす</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>たすく</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
{!! link_to_route('tasks.edit', 'このたすくを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection