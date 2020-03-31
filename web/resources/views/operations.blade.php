<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Opérations bancaires</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        </head>
        <body>

            <div class="container">

                <img src="images/Logo-Credit-mutuel-ARKEA.png" />

                <hr />

                <div >
                    <a href="operations"><button>Opérations</button></a>
                    <a href="reports"><button>Rapports</button></a>
                </div>
                <hr/>
                <h1>Détail des operations</h1>

                <div class="card text-white bg-dark">
                    <div class="row card-body">
                    <div class="col-9">

                        <form method="get" action="operationsByParams">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" placeholder="Catégorie de l'opération" name="type" value="{{ request('type') }}"/>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Mois (YYYY-MM)" name="month" value="{{ request('month') }}"/>
                            </div>
                            
                            <button type="submit"  class="btn btn-secondary">OK</button>
                        </form>

                        </div>

                        <div class="col" style="border-left:1px solid #fff">
                            <table style="font-size:150%;text-align:right;">
                            <tr><td>Débit : </td><td>-{{ $total_debit }} €</td><tr>
                            <tr><td>Crédit : </td><td>+{{ $total_credit }} €</td><tr>
                            <tr><td>Total : </td><td>{{ $total_credit - $total_debit }} €</td><tr>
                            </table>
                        </div>
                    </div>

                </div>

                <br/>

                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Date</th>
                            <th>Libellé</th>
                            <th>Débit</th>
                            <th>Crédit</th>
                            <th>Catégorie</th>
                        </tr>
                    </thead>
                    
                    @foreach($operations as $operation)
                        <tr>
                            <td>{{ $operation->date_operation }}</td>
                            <td>{{ $operation->libelle }}</td>
                            <td>{{ $operation->debit }}</td>
                            <td>{{ $operation->credit }}</td>
                            <td>{{ $operation->type }}</td>
                        </tr>
                    @endforeach
                </table>

                <hr/>

                {{ $operations->appends(request()->except('page'))->links() }}

            </div>
        </body>
    </html>

