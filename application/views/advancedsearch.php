<div class="row">
<div class="page-title col-md-12 no-pdd-horizon">
        <div class="col-md-6 col-sm-6 col-xs-12 page-title pdd-bottom-9">
            <h4>Search Result
                <span class="hide_text"><?php echo "for: " . $search_text ?></span>
            </h4>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 txt-al-right">
            <button type="submit" class="btn btn-default btn-sm" onclick="adv_search_hide_show()">
                <i class="ti ti-exchange-vertical pdd-right-5"></i>
                <span class="font-size-12">Filter Options</span>
            </button>
        </div>
    </div>
</div>


<div class="row">
    <div id="adv_search" class="col-md-12">
        <div class="card">
            <div class="card-block">
                <div class="pdd-btm-10">
                    <h5><b class="txt-color-slategray">Advanced Search Options:</b></h5>
                </div>

                <form id="search_data" class="width-100" action="<?php echo base_url('search/advsearch') ?>" method="post">

                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="width-35">
                                <input type="text" class="form-control" name="" value="<?php echo $search_text ?>" placeholder="Advanced address">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 no-pdd-horizon">
                        <div class="col-md-3">
                            <div class="row">
                            <div class="checkbox no-pdd-vertical">
                                <input id="form-2-1" name="form-2-1" type="checkbox" checked="">
                                <label for="form-2-1">Name</label>
                            </div>
                            </div>
                            <div class="row">
                            <div class="checkbox">
                                <input id="form-2-2" name="form-2-2" type="checkbox">
                                <label for="form-2-2">Category</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                            <div class="checkbox">
                                <input id="form-2-3" name="form-2-3" type="checkbox">
                                <label for="form-2-3">Tags</label>
                            </div>
                            </div>
                            <div class="row">
                            <div class="checkbox">
                                <input id="form-2-4" name="form-2-4" type="checkbox">
                                <label for="form-2-4">Events</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                            <div class="checkbox">
                                <input id="form-2-5" name="form-2-5" type="checkbox">
                                <label for="form-2-5">Type</label>
                            </div>
                            </div>
                            <div class="row">
                            <div class="checkbox">
                                <input id="form-2-6" name="form-2-6" type="checkbox">
                                <label for="form-2-6">Recording Date</label>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-3 no-pdd-right">
                            <div class="row">
                                <div class="col-md-4 checkbox">
                                    <label>Start Date</label>
                                </div>
                                <div class="col-md-8 timepicker-input input-icon no-pdd-left txt-al-left">
                                    <i class="ti-time"></i>
                                    <input id="form-2-7" type="text" class="form-control datepicker-1" placeholder="Start Date" data-provide="datepicker">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 checkbox">
                                    <label for="form-2-6">End Date</label>
                                </div>
                                <div class="col-md-8 timepicker-input input-icon no-pdd-left txt-al-left">
                                    <i class="ti-time"></i>
                                    <input id="form-2-8" type="text" class="form-control datepicker-1" placeholder="End Date" data-provide="datepicker">
                                </div>
                            </div>
                    </div>
                    </div>

                    <div class="col-md-12 no-pdd-horizon pdd-top-10 txt-al-right">
                    <button type="submit" class="btn btn-info btn-sm" onclick="adv_search_hide_show()">
                        <i class="ti ti-search pdd-right-5"></i>
                        <span class="font-size-12">Advanced Search</span>
                    </button>
                </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-block">
                <div class="table-overflow">
                    <table id="dt-opt" class="table table-sm table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Uploaded By</th>
                            <th>Category</th>
                            <th>Tagged As</th>
                            <th>Events</th>
                            <th>Rec Date</th>
                            <th>Content Type</th>
                            <th class="txt-al-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <span class="ei ei-file-word font-size-25"> </span>
                            </td>
                            <td>
                                <div class="list-info">
                                    <span class="title"><b>BUP Sports Schedule</b></span>
                                </div>
                            </td>
                            <td>
                                <div class="list-info">
                                    <span class="title">BUP Admin</span>
                                </div>
                            </td>
                            <td>
                                <div class="relative">
                                    <span class="">Sports</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span class="">Winter Camp</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span class="">Admission</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span>8 May 2017</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span>PDF/XML/JPG/MP4</span>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <a href="#" class=""><i class="ti-eye pdd-right-5"></i></a>
                                    <a href="#" class=""><i class="ti-pencil-alt txt-color-orange pdd-right-5"></i></a>
                                    <a href="#" class=""><i class="ti-download txt-color-green pdd-right-5"></i></a>
                                    <a href="#" class=""><i class="ti-close txt-color-red"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="ei ei-file-power-point font-size-25"> </span>
                            </td>
                            <td>
                                <div class="list-info">
                                    <span class="title"><b>BUP Sports Schedule</b></span>
                                </div>
                            </td>
                            <td>
                                <div class="list-info">
                                    <span class="title">BUP Admin</span>
                                </div>
                            </td>
                            <td>
                                <div class="relative">
                                    <span class="">Sports</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span class="">Winter Camp</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span class="">Admission</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span>8 May 2017</span>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <span>PDF/XML/JPG/MP4</span>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <a href="#" class=""><i class="ti-eye pdd-right-5"></i></a>
                                    <a href="#" class=""><i class="ti-pencil-alt txt-color-orange pdd-right-5"></i></a>
                                    <a href="#" class=""><i class="ti-download txt-color-green pdd-right-5"></i></a>
                                    <a href="#" class=""><i class="ti-close txt-color-red"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// --- define plugin js
$mtPagePlugins = array(
//    'assets/bower_components/datatables/media/js/jquery.dataTables.js'

);

//---- define page javascript
$mtPageScripts = array("page_javascript/search/search.js");

require_once ('footer.php');

?>



