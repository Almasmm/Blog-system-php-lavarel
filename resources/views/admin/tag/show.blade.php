@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="mt-2 m-0 mr-2">{{$tag->title}}</h1>
                        <a class="mt-3 mr-2 text-gray-dark" href="{{route('admin.tag.index')}}"><i
                                class="fa-solid fa-backward"></i></a>
                        <a class="mt-3 mr-1 text-success" href="{{route('admin.tag.edit', $tag->id)}}"><i
                                class="fa-solid fa-pen"></i></a>
                        <form class="mt-3" action="{{route('admin.tag.delete', $tag->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fa-solid fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Tags</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 mt-3" style="font-size: larger">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title" style="font-weight: bold;">
                                    Tag table
                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$tag -> id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$tag -> title}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
