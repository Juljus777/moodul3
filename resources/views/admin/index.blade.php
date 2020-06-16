@extends('layouts.app')
@section('content')
    <div class="outer-container bg-main-dark">
        <div class="pl-4">
            <h1 class="text-white">Toodete ülevaade</h1>
            <a class="btn btn-main mb-3" href="/admin/products/create">Loo uus toode</a>
        </div>
        <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" style="display:none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-dark">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Kas olete kindlad, et soovite kustutada X
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Katkesta</button>
                        <a href="/admin/products/{{$product->id ?? ''}}/delete" class="btn btn-danger m-1 confirmDelete">Kustuta toode</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-white border-white">
                <thead>
                <tr>
                    <th scope="col">Pilt</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nimi</th>
                    <th scope="col">Hind</th>
                    <th scope="col">Platform</th>
                    <th scope="col">Mängu tüüp</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                @foreach($products as $product)
                    <tr>
                        <td><img src="{{asset('images/products/'.$product->id.'/'.$product->imagePath)}}"
                                 alt="image" class="img-thumbnail" height="50px" width="50px"></td>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}€</td>
                        <td>{{$product->platform}}</td>
                        <td>{{$product->game_type}}</td>
                        <td>
                            <a href="/admin/products/{{$product->id}}/edit" class="btn btn-success m-1">Muuda toodet</a>
                            <a href="/{{$product->id}}" class="btn btn-primary m-1">Vaata toodet</a>
                            <button type="button"
                                    onclick="deleteProduct('{{$product->id}}', '{{$product->name}}')"
                                    data-toggle="modal"
                                    data-target="#adminModal"
                                    class="btn btn-danger m-1">Kustuta toode
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <script src="{{ asset('js/adminPanel.js') }}"></script>
    </div>
@endsection
