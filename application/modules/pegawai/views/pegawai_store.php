<!-- begin row -->
<div class="row">
    <div class="col-md-12">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">EMPLOYEE MANAGEMENT FORM</h4>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo base_url('pegawai/save'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo $parseform->id; ?>">
                    <div class="form-group">


                        <label class="col-md-3 control-label">NIK
                        </label>
                        <div class="col-md-9">
                            <input type="text" name="nik" value="<?php echo $parseform->nik; ?>" class="form-control"   />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama</label>
                        <div class="col-md-9">
                            <input type="text" name="nama" class="form-control"  value="<?php echo $parseform->nama; ?>" />
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label class="col-md-3 control-label">No Telp</label>
                        <div class="col-md-9">
                            <input type="text" name="no_telp" class="form-control"  value="<?php echo $parseform->no_telp; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-9">
                            <input type="text" name="alamat" class="form-control"  value="<?php echo $parseform->alamat; ?>" />
                        </div>
                    </div>


                    <div  align="center">
                        <button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
                        <a class="btn btn-danger" href="<?php echo base_url('pegawai'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
                    </div>
                    <!-- <div class="form-group">

                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end col-6 -->
</div>
<!-- end row -->
