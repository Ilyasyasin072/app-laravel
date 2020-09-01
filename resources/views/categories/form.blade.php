{{-- <div class="page-header">
    <h1>
        {{$menus}}
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            {{$menus}}
        </small>
    </h1>
</div> --}}

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="col-xs-12 col-sm-6">
            <div class="widget-box">
                <div class="widget-header">
                    <?php $menus = 'Form Category'; ?>
                    <h4 class="widget-title">{{$menus}}</h4>

                    <span class="widget-toolbar">
                        <a href="#" data-action="settings">
                            <i class="ace-icon fa fa-cog"></i>
                        </a>

                        <a href="#" data-action="reload">
                            <i class="ace-icon fa fa-refresh"></i>
                        </a>

                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>

                        <a href="#" data-action="close">
                            <i class="ace-icon fa fa-times"></i>
                        </a>
                    </span>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <form class="form-horizontal" role="form" action="">
                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Category Name</label>

                                <div class="col-sm-9">
                                    <input type="password" id="form-field-2" placeholder="Password"
                                        class="col-xs-10 col-sm-5" />
                                    <span class="help-inline col-xs-12 col-sm-7">
                                        <span class="middle"><h5>Category</h5></span>
                                    </span>
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">
                                    Description Category
                                </label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="col-xs-10 col-sm-5" id="form-input-readonly"></textarea>
                                    <span class="help-inline col-xs-12 col-sm-7">
                                        <label class="middle">
                                            <input class="ace" type="checkbox" id="id-disable-check" />
                                            <span class="lbl"> Disable it!</span>
                                        </label>
                                    </span>
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="clearfix form-actions">
                                <div class="col-md-offset-3 col-md-9">
                                    <button class="btn btn-info" type="button">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Submit
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="ace-icon fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>