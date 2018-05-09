<style>
.wadah{
  padding-left: 1px;
  padding-right: 0px;
}
.highcharts-title{
  cursor: pointer;
}
</style>

<section class="content-header">
  <h1>
    <?= $title ?>
    <small><?= $small_tittle ?></small>
  </h1>
  <ol class="breadcrumb">
    <?php foreach ($breadcrumb as $data): ?>
      <li><?= $data ?></li>
    <?php endforeach; ?>
  </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"><?= $title ?></h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
        title="Collapse">
        <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="wadah col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Airplane</label>
              <select class="form-control select2" multiple="multiple"  id="aircraft_type" style="width: 100%;">
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Aircraft Type</label>
              <select class="form-control select2" multiple="multiple" style="width: 100%;" id="aircraft_reg">
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Aircraft Registry</label>
              <select class="form-control select2" multiple="multiple" style="width: 100%;" id="aircraft_reg">
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>DOC Type</label>
              <select class="form-control select2" multiple="multiple" style="width: 100%;" id="aircraft_reg">
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="form-group">
            <label></label>
            <button class="btn btn-block btn-flat bg-navy" id="pencarian" style="margin-top: 4px;">
              <i class="fa fa-search"></i> Search
            </button>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="form-group">
            <label></label>
            <button class="btn btn-block btn-flat bg-red" id="pencarian" style="margin-top: 4px;">
              <i class="fa fa-print"></i> Excel
            </button>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          <div class="form-group">
            <label></label>
            <button class="btn btn-block btn-flat bg-orange" id="pencarian" style="margin-top: 4px;">
              <i class="fa fa-print"></i> PDF
            </button>
          </div>
        </div>
      </div>
      <hr />

      <div class="row">
        <div class="col-md-12">
          <div style="overflow-x:auto;">
            <table class="table table-hover table-bordered table-gmf" id="tabel_detail">
              <thead>
                <tr>
                  <th class="text-center">No.</th>
                  <th class="text-center">MPD Number</th>
                  <th class="text-center">Camp Number</th>
                  <th class="text-center">AMI Number</th>
                  <th class="text-center">AMM Ref</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">APPL</th>
                  <th class="text-center">ENG</th>
                  <th class="text-center">THRES</th>
                  <th class="text-center">REP</th>
                  <th class="text-center">DATE</th>
                  <th class="text-center">HOURS</th>
                  <th class="text-center">CYCLE</th>
                  <th class="text-center">DATE</th>
                  <th class="text-center">HOURS</th>
                  <th class="text-center">CYCLE</th>
                  <th class="text-center">ORDER</th>
                  <th class="text-center">REMARK</th>
                  <th class="text-center">URL Data</th>
                  <th class="text-center">AML</th>
                  <th class="text-center">ARC URL</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<script>
$(document).ready(function(){
  $('#year1').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
  });
});
</script>
