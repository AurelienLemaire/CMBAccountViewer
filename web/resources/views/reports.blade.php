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
                    <a href="charts"><button>Graphiques</button></a>

                </div>
                <hr/>
                <h1>Rapports mensuels</h1>

                <div class="card text-white bg-dark">
                    <div class="row card-body">
                    <div class="col-9">

                        <form method="get" action="reportsByParams">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" placeholder="Catégorie de l'opération" name="type" value="{{ request('type') }}"/>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="&#128197; Mois (YYYY-MM)" name="month" value="{{ request('month') }}"/>
                            </div>
                            
                            <button type="submit"  class="btn btn-secondary">OK</button>
                        </form>

                        </div>

                    </div>

                </div>

                <br/>

                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Date</th>
                            <th>Catégorie</th>
                            <th>Débit</th>
                            <th>Crédit</th>
                        </tr>
                    </thead>
                    
                    @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->period }}</td>
                            <td>{{ $report->type }}</td>
                            <td>{{ $report->debit }}</td>
                            <td>{{ $report->credit }}</td>
                        </tr>
                    @endforeach
                </table>

                <hr/>

                {{ $reports->appends(request()->except('page'))->links() }}

            </div>
        </body>
    </html>

