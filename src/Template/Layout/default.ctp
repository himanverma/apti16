<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>

        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        
        <?= $this->Html->script([
            'jquery.min',
            'moment.min',
            'moment-timezone-with-data.min',
            'bootstrap.min',
            'knockout-min',
            'knockout.mapping.min'
        ]) ?>
        
        
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://getbootstrap.com/examples/starter-template/#">
                        Aptitude Class
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://getbootstrap.com/examples/starter-template/#">Home</a></li>
                        <li><a href="http://getbootstrap.com/examples/starter-template/#about">About</a></li>
                        <li><a href="http://getbootstrap.com/examples/starter-template/#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div style="height: 51px">
                
            </div>
            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </body>
</html>
