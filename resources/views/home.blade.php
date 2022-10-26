@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex aeligns-items-center justify-content-center mb-5">
        <img src="{{ asset('assets/img/logo.png') }}" width="150px" alt="">
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold">Current Photo</h4>
                    <div class="d-flex aligns-items-left justify-content-left">
                    </div>
                </div>
                <div class="card-body">
                     @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" enctype="multipart/form-data" action="{{ route('uploads.store') }}">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-2 aligns-item-center justify-content-center ml-4">

                                @foreach ($name as $nam)
                                    <img src="{{ asset('images/'.$nam->name) }}" width="100px" height="100px" alt="..." class="rounded-circle">
                                @endforeach
                            </div>
                            <div class="col-6 aligns-items-left justify-content-left">
                                <p class="fw-light">Photo will be shown to your users when you send them messages or reply to them. Max Photo size 1MB</p>
                                <input type="file" name="photo" id="" autofocus class="@error('photo') is-invalid @enderror form-control form-group">
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-1 aligns-items-left justify-content-left">

                            </div>
                            <div class="col-3">
                                <div class="col-md-8 d-grid gap-2 offset-md-2">
                                <button type="submit" class="btn btn-outline-primary">
                                    {{ __('Upload new photo') }}
                                </button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
