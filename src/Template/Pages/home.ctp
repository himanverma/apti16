<div class="row">
    <div class="col-lg-7">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/wall/1.jpg" alt="..." height="180px">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="/wall/5.jpg" alt="..."  height="180px">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="/wall/3.png" alt="..."  height="180px">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="/wall/4.jpg" alt="..."  height="180px">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="/wall/2.jpg" alt="..."  height="180px">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                Get Started
            </div>
            <div class="panel-body">
                <center>
                    <a class="btn btn-lg btn-primary" href="/classes">
                        With Levels
                    </a>
                    OR
                    <a class="btn btn-lg btn-primary" href="/subjects">
                        With Subjects
                    </a>
                </center>
            </div>
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <h4>Most Popular</h4>
            </a>
            <a href="/maths/decimals/addition-and-subtraction-of-decimals" class="list-group-item">Addition And Subtraction Of Decimals</a>
            <a href="/classes/level-3" class="list-group-item">Level 3</a>
            <a href="/subjects/mental-ability" class="list-group-item">Mental Ability</a>
            <a href="/mental-ability/coding-and-decoding" class="list-group-item">Coding and decoding</a>
        </div>

    </div>
</div>
<div class="row">
    <?php foreach($klasses as $kl) { ?>
    <a href="">
        
    </a>
    <?php } ?>
</div>