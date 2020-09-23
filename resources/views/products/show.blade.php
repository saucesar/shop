@extends('layouts.app', ['title' => 'Products List'])

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row d-flex justify-content-left mt-5">
            <div class="col-12">
                <h1>{{ $product->name }}</h1>            
            </div>
        </div>
        <div class="row d-flex justify-content-left mt-2 border">
            <div class="col-8">
                <div class="border mt-2 mb-2">
                    <img src="#" alt="" srcset="" width="30" height="30">
                </div>     
                <label for="resume">Resume</label>
                <div class="border mt-2 mb-2" id="resume">
                    <textarea class="form-control" name="" id="" cols="30" rows="10">{{ $product->resume }}</textarea>
                </div>
                <label for="descr">Description</label>
                <div class="border mt-2 mb-2" id="descr">
                    <textarea class="form-control" name="" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="col-4">
                <labelfor="">Reference</label>
                <br>
                <input type="text" value="{{ $product->ref }}" readonly>
                <br>
                <br>
                <label for="">Quantity</label>
                <br>
                <input type="text" value="{{ $product->ref }}" readonly>
                <br>
                <br>
                <label for="">Price</label>
                <br>
                <small>HT</small>
                <div class="input-group mb-2">
                    <input type="text" value="{{ $product->price_ht }}" readonly>
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                </div>
                <small>TTC</small>
                <div class="input-group mb-2">
                    <input type="text" value="{{ $product->price_ht*1.2 }}" readonly>
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                </div>
                <br>
                <br>
                <label for="">Categories</label>
                <br>
                <div class="border mt-2 mb-2" id="descr">
                    <div class="mt-2 ml-2 mb-2 mr-2 border">
                        {{ implode(', ', $product->categories) }}
                    </div>
                    <div class="mt-2 ml-2 mb-2 mr-2">
                        <input type="checkbox" name="" id="" {{ in_array('CAT1', $product->categories) ? 'checked' : '' }}>
                        <label for="">CAT1</label>
                        <br>
                        <input type="checkbox" name="" id="" {{ in_array('CAT2', $product->categories) ? 'checked' : '' }}>
                        <label for="">CAT2</label>
                        <br>
                        <input type="checkbox" name="" id="" {{ in_array('CAT3', $product->categories) ? 'checked' : '' }}>
                        <label for="">CAT3</label>
                        <br>
                        <input type="checkbox" name="" id="" {{ in_array('CAT4', $product->categories) ? 'checked' : '' }}>
                        <label for="">CAT4</label>
                        <br>
                        <input type="checkbox" name="" id="" {{ in_array('CAT5', $product->categories) ? 'checked' : '' }}>
                        <label for="">CAT5</label>
                    </div>
                </div>
                <br>
                <label for="">Active?</label>
                <br>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn {{ $product->active ? 'btn-success active' : ''}}">
                        <input type="radio" name="active" {{ $product->active ? 'checked' : ''}}>
                        YES
                    </label>
                    <label class="btn {{ !$product->active ? 'btn-danger active' :  ''}}">
                        <input type="radio" name="active" {{ !$product->active ? 'checked' : ''}}>
                        NO
                    </label>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection