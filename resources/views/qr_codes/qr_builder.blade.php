@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="continer">

                        <div class="row">
                            <div class="col-8">
                                <form method="POST" action="{{ route('qr.builder') }}" class="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nam">nam</label>
                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name">body</label>
                                        <input type="text" name="body" class="form-control" value="{{ old('name') }}">
                                        @error('body')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary">generate qr</button>
                                    </div>
                                    <hr>






                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="qrSize">qr size</label>
                                                <select name="qrSize">
                                                    <option value="" disabled selected>select size</option>
                                                    <option value="300">300*300</option>
                                                    <option value="600">600*600</option>
                                                    <option value="900">900*900</option>
                                                </select>
                                             </div>
                                    </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                            <label for="imageType"> image type</label>
                                            <select name="imageType">
                                                <option value="" disabled selected>select format</option>
                                                <option value="png">PNG</option>
                                                <option value="svg">SVG</option>
                                                <option value="eps">EPS</option>
                                            </select>
                                        </div>
                                    </div>
                                        <div class="col-3">
                                            <div class="form-group">

                                            <label for="qrCorrection"> qr Correction</label>
                                            <select name="qrCorrection">
                                                <option value="" disabled selected>select qr correction</option>
                                                <option value="l">7%</option>
                                                <option value="m">15%</option>
                                                <option value="q">25%</option>
                                                <option value="h">30%</option>
                                            </select>
                                        </div>
                                    </div>

                                        <div class="col-3">
                                            <div class="form-group">
                                            <label for="qrEncoding"> qr Encoding</label>
                                            <select name="qrEncoding">
                                                <option value="" disabled selected>select qr encoding</option>
                                                <option value="ISO-8859-1">ISO-8859-1</option>
                                                <option value="ISO-8859-2">ISO-8859-2</option>
                                                <option value="UTF-8">UTF-8</option>
                                                <option value="ASCII">ASCII</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="col-4">
                                @if( session('image'))
                                 <img src="{{ asset('qr_codes/'. session('image')) }}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
