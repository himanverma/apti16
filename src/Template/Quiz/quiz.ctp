<div>
    <ol class="breadcrumb">
        <li><a href="/classes">Home</a></li>
        <li><a href="/<?= $subject->slug ?>"><?= $subject->title ?></a></li>
        <li><a href="/<?= $subject->slug ?>/<?= $chapter->slug ?>"><?= $chapter->title ?></a></li>
        <li><a href="/<?= $subject->slug ?>/<?= $chapter->slug ?>/<?= $subChapter->slug ?>"><?= $subChapter->title ?></a></li>
    </ol>
</div>
<div class="row">
    <div class="col-lg-8" data-bind="foreach: currentQ">
        <div data-bind="html: ques" class="well well-sm">

        </div>
        <!-- ko if: $root.isChecking() == false -->
        <ul class="list-group">
            <label class="list-group-item" data-bind="css:{active:$root.selectedOpt() == 'a'}">
                <input type="radio" name="selectedOpt" data-bind="checked: $root.selectedOpt" value="a" style="display: none;" /> 
                <div data-bind="html: opa"></div>
            </label>
            <label class="list-group-item" data-bind="css:{active:$root.selectedOpt() == 'b'}">
                <input type="radio" name="selectedOpt" data-bind="checked: $root.selectedOpt" value="b" style="display: none;" /> 
                <div data-bind="html: opb"></div>
            </label>
            <label class="list-group-item" data-bind="css:{active:$root.selectedOpt() == 'c'}">
                <input type="radio" name="selectedOpt" data-bind="checked: $root.selectedOpt" value="c" style="display: none;" /> 
                <div data-bind="html: opc"></div>
            </label>
            <label class="list-group-item" data-bind="css:{active:$root.selectedOpt() == 'd'}">
                <input type="radio" name="selectedOpt" data-bind="checked: $root.selectedOpt" value="d" style="display: none;" /> 
                <div data-bind="html: opd"></div>
            </label>
        </ul>
        <button class="btn btn-lg btn-primary" data-bind="click:$root.submit">
            Submit
        </button>
        <button class="btn btn-lg btn-primary" data-bind="click:$root.submitAndFinish">
            Submit & Finish
        </button>
        <!-- /ko -->
        
        <!-- ko if: $root.isChecking() -->
        <ul class="list-group">
            <label class="list-group-item" data-bind="css:{active:$root.selectedOpt() == 'a'}">
                <div data-bind="html: opa"></div>
            </label>
            <label class="list-group-item" data-bind="css:{active:$root.selectedOpt() == 'b'}">
                <div data-bind="html: opb"></div>
            </label>
            <label class="list-group-item" data-bind="css:{active:$root.selectedOpt() == 'c'}">
                <div data-bind="html: opc"></div>
            </label>
            <label class="list-group-item" data-bind="css:{active:$root.selectedOpt() == 'd'}">
                <div data-bind="html: opd"></div>
            </label>
        </ul>
        <button class="btn btn-lg btn-primary" data-bind="click:$root.next">
            Proceed to Next...
        </button>
        <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#explain">
            Please Explain!
        </button>
        <!-- /ko -->
        
        
        
        <!-- Modal -->
        <div class="modal fade" id="explain" tabindex="-1" role="dialog" aria-labelledby="explainModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body" data-bind="html: exp">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
        
        
    </div>
    <div class="col-lg-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Score
            </div>
            <div class="panel-body">
                <h1 style="text-align: center" data-bind="text:score">
                    
                </h1>
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">
                Timer
            </div>
            <div class="panel-body">
                <h1 style="text-align: center" data-bind="text:timer"></h1>
            </div>
        </div>
        
        <h4 style="text-align: center">
            <span data-bind="text:$root.index"></span> out of <?= count($questions->toArray()) ?>
                    </h4>
    </div>
    <div class="col-lg-2">
        <div style="height: 200px; background: #ccc; text-align: center; padding-top: 48%;">
            Ad Space 1
        </div>
        <br>
        <div style="height: 200px; background: #ccc; text-align: center; padding-top: 48%;">
            Ad Space 2
        </div>
    </div>
</div>



<script type="text/javascript">
    var QuizVM = function (d) {
        var me = this;
        me.questions = ko.observableArray([]);
        me.currentQ = ko.observableArray([]);
        me.index = ko.observable(0);
        me.selectedOpt = ko.observable('');
        me.isChecking = ko.observable(false);
        
        me.startTm = moment();
        me.timer = ko.observable('');
        me.score = ko.observable(0);
        me.attempted = ko.observable(0);
        
        me.checkAns = function(){
            me.attempted(me.attempted() + 1);
            return me.selectedOpt() == me.currentQ()[0].correct;
        };
        me.submitAndFinish = function () {
            me.isChecking(true);
            if(me.checkAns()){
                me.score(me.score() + parseInt(me.currentQ()[0].marks,10));
            }else{
                
            }
            
            me.index(me.index() + 1);
            me.currentQ.removeAll();
            me.currentQ.push((me.questions()[me.index()].que));
            me.selectedOpt('');
        };
        me.submit = function () {
            me.isChecking(true);
            if(me.checkAns()){
                me.score(me.score() + parseInt(me.currentQ()[0].marks,10));
            }else{
                
            }
        };
        me.next = function(){
            me.index(me.index() + 1);
            me.currentQ.removeAll();
            me.currentQ.push((me.questions()[me.index()].que));
            me.selectedOpt('');
            me.isChecking(false);
        };

        me._init = function (d) {
            me.questions(d);
            me.currentQ.push((me.questions()[me.index()].que));
            setInterval(function(){
                var now = moment();
                var m = parseInt(moment.duration(now.diff(me.startTm)).asMinutes());
                var s = parseInt(moment.duration(now.diff(me.startTm)).asSeconds());
                me.timer(m + ':' + s);
            },1000);
        };
        me._init(d);
    }
    var data = <?= json_encode($questions) ?>;
    var qObj = new QuizVM(data);
    ko.applyBindings(qObj);
</script>