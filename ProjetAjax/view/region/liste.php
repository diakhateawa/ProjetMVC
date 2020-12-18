<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ajax</title>
        <link rel="stylesheet" type="text/css" media="screen" href="public/css/bootstrap-cerulean.min.css">
        <script></script>
    </head>
    <body>
        <div class="nav navbar-primary">
            <ul class="nav navbar-nav">
                <li><a href="regions">Gestion des regions</a></li>
                <li><a href="departements">Gestion des departements</a></li>
            </ul>
        </div>
        <div class="container col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Liste des regions</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>idR</td>
                            <td>nomR</td>
                            <td colspan="2">action</td>
                        </tr>
                        <?php
                        require_once '../../model/regiondb.php';
                        $regions = listeRegion()->fetchAll();
                        foreach ($regions as $key => $value)
                        {
                            echo "<tr>
                                    <td>".$value[0]."</td>
                                    <td>$value[1]</td>        
                                 </tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="panel-footer">DITI 4</div>
            </div>
        </div>

        <div class="container col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Formulaire de gestion des regions</div>
                <div class="panel-body">
                    <form action="regionController" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="nomR">Nom de la région</label>
                            <input class="form-control" type="text" name="nomR" id="nomR"/>
                        </div>
                        <div class="form-group">
                            <input class="btn-success" type="submit" name="envoyer" id="ajouter" value="ajouter"/>
                            <input class="btn-danger" type="reset" name="annuler " id="annuler" value="annuler"/>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">DITI 4</div>
            </div>
        </div>
    </body>
</html>

        