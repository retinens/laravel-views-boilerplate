@extends('admin.layout.admin')
@section('breadcrumbs')
    <li class="breadcrumb-item active">Compte professionnel</li>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
            <span>
                {{$professionalAccount->title}}
            </span>
                <span>
                Nom : {{$professionalAccount->last_name}}
            </span>
                <span>
                Prénom : {{$professionalAccount->first_name}}
            </span>
                <span>
                Adresse mail : {{$professionalAccount->email}}
            </span>
                <span>
                Profession : {{$professionalAccount->profession}}
            </span>
            </div>
            <div class="card card-body">
                <h3 class="py-1">Adresse</h3>
                <hr>
                <span>
                Rue : {{$address->address}}
            </span>
                <span>
                Ville : {{$address->city}}
            </span>
                <span>
                    Code postal : {{$address->post_code}}
            </span>
                <span>
                Pays : {{$address->country}}
            </span>
            </div>
            <div class="card card-body">
            <span>
                Numéro de référence à l'ordre : {{$professionalAccount->vetOrderNbr}}
            </span>
                <span>
                Nom de la pharmacie : {{$professionalAccount->pharmacy_name}}
            </span>
                <span>
                Numéro de téléphone : {{$professionalAccount->telephoneNbr}}
            </span>
                <span>
                Numéro de TVA : {{$address->vat_number}}
            </span>
            </div>
        </div>
        @if ($professionalAccount->referred_orders->count()>0)
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header">
                        <h4>Commandes de clients</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Référence de la commande</th>
                                <th>Nom client</th>
                                <th class="text-end">Montant</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($professionalAccount->referred_orders as $referredOrder)
                                <tr>
                                    <td>
                                        <a href="{{route('admin.orders.show', $referredOrder)}}">{{$referredOrder->number}}</a>
                                    </td>
                                    <td>{{$referredOrder->customer->full_name}}</td>
                                    <td class="text-end">{{money($referredOrder->total)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-end font-weight-bold">Total : {{money($professionalAccount->referred_orders->sum("total"))}}</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="card-body">
        @if (!$professionalAccount->professional_validated_at)
            <form action="{{ route('admin.professional-accounts.verify', $professionalAccount)}}" method="post"
                  class="form-validate">
                @csrf
                <button class="btn btn-danger" type="submit">
                    <i class="fa fa-check"></i> Valider le compte professionnel
                </button>
            </form>
        @endif
        <div class="py-1">
            <a class="btn btn-primary" href="mailto:{{$professionalAccount->email}}">
                <i class="fas fa-envelope"></i> Contacter
            </a>
        </div>
    </div>
@stop
