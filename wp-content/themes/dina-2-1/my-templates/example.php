<style>

    a:hover,a:focus{
        text-decoration: none;
        outline: none;
    }
    .tab-content{
        border: 1px solid #ddd;
        border-top: 0px solid transparent;
        margin-top: 15px;
        padding:12px;
    }
    .tab{
        padding-bottom: 60px;
    }
    .tab li{
        border-right: 1px solid #e0e0e0;
        border-top: 1px solid #e0e0e0;
    }
    .tab li a {
        border-radius: 0;
        color: #232323;
        font-size: 15px;
        margin-right:0;
        padding: 12px 30px;
    }
    .tab li a:hover{
        border-bottom:none;
        background: #ebebeb;
        color: #232323;
    }
    .tab li.active > a,
    .tab .nav-tabs > li.active > a:focus,
    .tab .nav-tabs > li.active > a:hover {
        border: none;
        border-top: 2px solid #dc005a;
        color: #dc005a;
    }
    .tab ul{
        border-left: 1px solid #e0e0e0;
    }
    .tab .tab-content{
        color:#5a5a5a;
        font-size: 13px;
        margin: 0;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#House" aria-controls="House" role="tab" data-toggle="tab">House</a></li>
                    <li role="presentation"><a href="#Whites" aria-controls="Whites" role="tab" data-toggle="tab">Whites</a></li>
                    <li role="presentation"><a href="#Rose" aria-controls="Rose" role="tab" data-toggle="tab">Rose</a></li>
                    <li role="presentation"><a href="#Reds" aria-controls="Reds" role="tab" data-toggle="tab">Reds</a></li>
                    <li role="presentation"><a href="#Sparkling_Wines" aria-controls="Sparkling_Wines" role="tab" data-toggle="tab">Sparkling Wines
                        </a></li>
                    <li role="presentation"><a href="#Champagne" aria-controls="Champagne" role="tab" data-toggle="tab">Champagne
                        </a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="House">
                        <p>
                            Les Vignes Pays D'Oc Red (France)
<br>

                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Whites">
                        <p>2 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Rose">
                        <p>3 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Reds">
                        <p>4 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Sparkling_Wines">
                        <p>4 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Champagne">
                        <p>4 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
