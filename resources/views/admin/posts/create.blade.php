@extends('layouts.admin')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heaidng">新規作成</div>
                <div class="panel-body">

                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->() as $error)
                                    <li>{{ $error }}</li>
                            </ul>
                        </div>
                    @enfif
                    
                     {!! Form::open(['url' => 'admin/posts',
                                'class' => 'Form-horizontal',
                                'id' => 'post-input']) !!}

                    @incluude('admin.posts.fields')
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection