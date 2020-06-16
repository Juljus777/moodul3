@extends('layouts.app')
@section('content')
    <div class="outer-container bg-main-dark pb-4">
        <div class="container">
            <h1>Uuenda toodet: {{$product->name}}</h1>
            <form action="/admin/products/{{$product->id}}" method="post" enctype="multipart/form-data" class="text-white">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <label>Toote nimetus:</label>
                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control @error('name') border-danger @enderror"
                                   placeholder=""
                                   name="name"
                                   value="{{$product->name}}">
                        </div>
                        @error('name')
                        <p class="text-danger">Palun täitke see väli</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label>Hind: (€)</label>
                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control @error('price') border-danger @enderror"
                                   placeholder=""
                                   name="price"
                                   value="{{$product->price}}">
                        </div>
                        @error('price')
                        <p class="text-danger">Palun täitke see väli</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label>Toote kood:</label>
                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control @error('code') border-danger @enderror"
                                   placeholder=""
                                   name="code"
                                   value="{{$product->code}}">
                        </div>
                        @error('code')
                        <p class="text-danger">Palun täitke see väli</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label>Tootja:</label>
                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control @error('manufacturer') border-danger @enderror"
                                   placeholder=""
                                   name="manufacturer"
                                   value="{{$product->manufacturer}}">
                        </div>
                        @error('manufacturer')
                        <p class="text-danger">Palun täitke see väli</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label>Platform:</label> <button class="btn badge badge-pill badge-primary"
                                                         type="button"
                                                         data-toggle="collapse"
                                                         data-target="#collapseCategoryHelper">?</button>
                        <div class="collapse text-dark" id="collapseCategoryHelper">
                            <div class="card card-body">
                                <p><b>Näited:</b></p>
                                <ul>
                                    <li>PlayStation (1, 2, 3, 4, 5)</li>
                                    <li>XBOX (720, 360, ONE, ONEX)</li>
                                    <li>PC</li>
                                    <li>Switch</li>
                                </ul>
                                <p class="text-muted">Platformideks ei pea olema ette näidatud platformid.</p>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control @error('platform') border-danger @enderror "
                                   placeholder=""
                                   name="platform"
                                   value="{{$product->platform}}">
                        </div>
                        @error('platform')
                        <p class="text-danger">Palun täitke see väli</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label>Mängu keel:</label>
                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control"
                                   placeholder=""
                                   name="language"
                                   value="{{$product->language}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label>PEGI reiting:</label>
                        <div class="input-group mb-3">
                            <input type="number"
                                   min="0"
                                   class="form-control"
                                   placeholder=""
                                   name="pegi_rating"
                                   value="{{$product->pegi_rating}}">
                        </div>
                        @error('pegi_rating')
                        <p class="text-danger">Palun täitke see väli</p>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label>Mängu tüüp:</label> <button class="btn badge badge-pill badge-primary"
                                                           type="button"
                                                           data-toggle="collapse"
                                                           data-target="#collapseTypeHelper">?</button>
                        <div class="collapse text-dark" id="collapseTypeHelper">
                            <div class="card card-body">
                                <p><b>Näited:</b></p>
                                <ul>
                                    <li>MMORPG</li>
                                    <li>MMO</li>
                                    <li>RPG</li>
                                    <li>MOBA</li>
                                </ul>
                                <p class="text-muted">Mängu tüübiks ei pea olema ette näidatud tüübid.</p>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text"
                                   class="form-control @error('game_type') border-danger @enderror"
                                   placeholder=""
                                   name="game_type"
                                   value="{{$product->game_type}}">
                        </div>
                        @error('game_type')
                        <p class="text-danger">Palun täitke see väli</p>
                        @enderror
                    </div>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" name="multiplayer" id="multiplayer" @if($product->multiplayer) checked @endif>
                    <label class="custom-control-label" for="multiplayer">Mitmikmäng?</label>
                </div>
                <label>Toote pilt:</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control-file" name="imagePath">
                </div>
                @error('imagePath')
                    <p class="text-danger">Palun lisage pilt</p>
                @enderror
                <button type="submit" class="btn btn-success">Uuenda toodet</button>
                <a class="btn btn-danger" href="/admin/products">Katkesta</a>
            </form>
        </div>
    </div>
@endsection
