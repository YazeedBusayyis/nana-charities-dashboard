@extends('layouts.app')

@section('content')

    <div class="container" style="height: auto; padding-top: 20px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default text-left">
                    <div class="panel-body">
                        <!-- ********************** -->
                        <!-- **** NEW MODAL **** -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newModal">جمعية جديدة</button>
                        <!-- Modal -->
                        <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-left">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">جمعية جديدة</h4>
                                    </div>
                                    <form role="form" action="/charities" method="post">
                                        {{csrf_field()}}
                                        <div class="modal-body text-right">
                                            <div class="form-group">
                                                <label>اسم الجمعية</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>البريد الإلكتروني</label>
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>كلمة المرور</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Frappe Charity ID</label>
                                                <input type="text" name="frappe_user_id" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Has a special dashboard?</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="special_dashboard">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Dashboard Link</label>
                                                <input type="text" name="dashboard_link" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                                            <button type="submit" class="btn btn-primary">إضافة</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ********************** -->
                    </div>
                </div>
                <div class="panel panel-default text-right">
                    <!-- Table -->
                    <table class="table table-striped text-center" dir="rtl">
                        <thead>
                        <tr class="bordered">
                            <th class="text-center">اسم الجمعية</th>
                            <th class="text-center">الايميل</th>
                            <th class="text-center">Frappe Charity ID</th>
                            <th class="text-center">العمليات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($charities as $charity)
                            <tr>
                                <td>{{ $charity->name }}</td>
                                <td>{{ $charity->email }}</td>
                                <td>{{ $charity->frappe_user_id }}</td>
                                <td>
                                    <!-- ********************** -->
                                    <!-- **** DELETE MODAL **** -->
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{$charity->id}}">حذف</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{$charity->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-left">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">حذف جمعية</h4>
                                                </div>
                                                <form role="form" method="post" action="/charities/{{$charity->id}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <div class="modal-body text-center">هل أنت متأكد أنك ترغب بحذف {{$charity->name}}</div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                                                        <button type="submit" class="btn btn-danger">حذف</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ********************** -->
                                    <!-- **** MODIFY MODAL **** -->
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modifyModal{{$charity->id}}">تعديل</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modifyModal{{$charity->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-left">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">تعديل جمعية</h4>
                                                </div>
                                                <form role="form" action="/charities/{{$charity->id}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="PATCH">
                                                    <div class="modal-body text-right">
                                                        <div class="form-group">
                                                            <label>اسم الجمعية</label>
                                                            <input type="text" name="name" class="form-control" value="{{$charity->name}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Frappe Charity ID</label>
                                                            <input type="url" name="frappe_user_id" class="form-control" value="{{$charity->frappe_user_id}}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">الغاء</button>
                                                        <button type="submit" class="btn btn-primary">تعديل</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ********************** -->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection