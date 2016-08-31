@extends('layouts.adminMaster')

@section('title', 'Admin')

@section('content')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            文章列表
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/admin/{{$user_id}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> 文章列表
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-6">

                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>日期</th>
                                        <th>文章標題</th>
                                        <th>文章類別</th>
                                        <th>人氣</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($posts as $post)
                                    <tr>
                                        <td></td>
                                        <td>{{$post->updated_at}}</td>
                                        <td><a href="/blogs/posts/{{$post->id}}">{{$post->title}}</a></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="/admin/edit/{{$post->id}}"><i class="fa fa-fw fa-edit"></i></a></td>
                                    </tr>
                                    @endforeach

                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@endsection