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
              <label>APU Type</label>
              <select class="form-control select2" multiple="multiple" style="width: 100%;" id="aircraft_reg">
              </select>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>APU SN</label>
              <select class="form-control select2" multiple="multiple" style="width: 100%;" id="aircraft_reg">
              </select>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Biweekly Date</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control" id="year1">
              </div>
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
        <div class="col-md-6 col-xs-12 col-offset-12 pull-right">
          <div class="form-group">
            <div class="col-md-6">
              <label>TSN : </label><input type="text" placeholder="NO DATA" class="form-control pull-right" />
            </div>
            <div class="col-md-6">
              <label>CSN : </label><input type="text" placeholder="NO DATA" class="form-control pull-right" />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" style="overflow-x:auto;">
          <table class="table table-hover table-bordered table-gmf" id="tabel_detail">
            <thead>
              <tr>
                <th class="text-center">SB Number</th>
                <th class="text-center">Revision</th>
                <th class="text-center">Description</th>
                <th class="text-center">Compliance</th>
                <th class="text-center">Date of Comp.</th>                
                <th class="text-center">Remarks</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
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
