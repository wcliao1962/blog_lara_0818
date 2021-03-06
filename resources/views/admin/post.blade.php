@extends('layouts.adminMaster')

@section('title', 'Admin')

@section('content')
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            發表文章
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> 發表文章
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="/admin/postslist/{{$user_id}}" method="post">
                            <div class="form-group">
                                <input class="form-control"  type="hidden" name="is_edit" value="false" readonly>
                            </div>

                             <div class="form-group">
                               <input class="form-control" placeholder="請輸入文章標題" name="title">
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="{{$now}}" name="cu_time" readonly>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="請輸入文章內容" rows="12" name="content"></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@endsection