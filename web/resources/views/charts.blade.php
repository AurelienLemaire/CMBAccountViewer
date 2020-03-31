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
                <h1>Graphiques</h1>

                <div class="card text-white bg-dark">
                    <div class="row card-body">
                    <div class="col-9">

                        <form method="get" action="charts">
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

                    </div>

                </div>

                <br/>

                <div id="app">
            {!! $chart->container() !!}
        </div>               
                  

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

  
        
        {!! $chart->script() !!}

            </div>
        </body>
    </html>

