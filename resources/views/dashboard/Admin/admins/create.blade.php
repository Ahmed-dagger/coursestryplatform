@extends('dashboard.layouts.master')

@section('css')

@endsection

@section('pageTitle')
    {{$pageTitle}}
@endsection

@section('content')
    @include('dashboard.layouts.common._partial.messages')

    <form class="form" method="POST" action="{{ route('admin.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>الاسم:</label>
                <input name="name" type="text" class="form-control form-control-solid" placeholder="Enter full name" value="{{ old('name') }}"/>
                <span class="form-text text-muted">Please enter your full name</span>
            </div>
            <div class="form-group">
                <label>البريد الالكتروني:</label>
                <input name="email" type="email" class="form-control form-control-solid" placeholder="Enter email" value="{{ old('email') }}"/>
                <span class="form-text text-muted">We'll never share your email with anyone else</span>
            </div>
            <div class="form-group">
                <label>رقم الهاتف:</label>
                <input name="phone" type="text" class="form-control form-control-solid" placeholder="Enter phone" value="{{ old('phone') }}"/>
                <span class="form-text text-muted">Please enter your phone number</span>
            </div>
            <div class="form-group">
                <label>كلمة السر:</label>
                <input name="password" type="password" class="form-control form-control-solid" placeholder="Enter password"/>
                <span class="form-text text-muted">Please enter your password</span>
            </div>
            <div class="form-group">
                <label>تأكيد كلمة السر:</label>
                <input name="password_confirmation" type="password" class="form-control form-control-solid" placeholder="Confirm password"/>
                <span class="form-text text-muted">Please confirm your password</span>
            </div>
            <div class="form-group">
                <label>الحالة:</label>
                <div class="checkbox-list">
                    <label class="checkbox">
                        <input type="radio" name="status" value="active" {{ old('status') == 'active' ? 'checked' : '' }}/>
                        <span></span>
                        Active
                    </label>
                    <label class="checkbox">
                        <input type="radio" name="status" value="inactive" {{ old('status') == 'inactive' ? 'checked' : '' }}/>
                        <span></span>
                        Inactive
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>نوع المشرف:</label>
                <div class="checkbox-list">
                    <label class="checkbox">
                        <input type="radio" name="role" value="Admin" {{ old('role') == 'Admin' ? 'checked' : '' }}/>
                        <span></span>
                        Admin
                    </label>
                    <label class="checkbox">
                        <input type="radio" name="role" value="Supervisor" {{ old('role') == 'Supervisor' ? 'checked' : '' }}/>
                        <span></span>
                        Supervisor
                    </label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">تأكيد</button>
            <button type="reset" class="btn btn-secondary">إلغاء</button>
        </div>
    </form>



    @endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@endpush