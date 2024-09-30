
<!------ Include the above in your HEAD tag ---------->

<div class="content-wrapper"> <br />
    <section class="content-header">
      <h1>
        Enkripsi
        <small>Enkripsi AES 128</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Enkripsi</li>
      </ol>
    </section>
    <div class="row content">

    	<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
				<div class="panel-body">
					<div class="input-group image-preview">
						<input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
						<!-- don't give a name === doesn't send on POST/GET --> 
						<span class="input-group-btn"> 
						<!-- image-preview-clear button -->
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
						<!-- image-preview-input -->
						<div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
							<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
							<!-- rename it --> 
						</div>
						<button type="button" class="btn btn-labeled btn-default"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
						</span> </div>
					<!-- /input-group image-preview [TO HERE]--> 
					
					<br />
					<form class="form-horizontal" method="post" action="encrypt-process.php" enctype="multipart/form-data">
                      <fieldset>
                        
                        <div class="form-group">
                          <label class="col-lg-2 control-label" style="color:#000;" for="inputPassword">Key</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="pwdfile" required>
                            <!--<input class="form-control" id="inputPassword" type="password" placeholder="Text" name="string" required>
                            <input class="form-control" id="inputPassword" type="password" placeholder="Kunci" name="key" required>-->
                              <!-- <a href="3des-enkripsi.php" target="_blank" rel="noopener noreferrer" type="submit" name="enkripsi_pass_now" value="Enkripsi Password" class="form-control btn btn-info">
                                3DES
                              </a> -->
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2  control-label" style="color:#000;" for="textArea">Deskripsi</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" id="textArea" rows="3" name="desc" placeholder="Deskripsi"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="textArea"></label>
                          <div class="col-lg-5">
                            <input type="submit" name="encrypt_now" value="Enkripsi File" class="form-control btn btn-success">
                          </div>
                        </div>
                      </fieldset>
                    </form>
					<br />
					<!-- Progress Bar -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
					</div>
					<br />
					
				</div>
			</div>
		</div>
        
    	<div class="col-md-5">
            <div class="panel panel-default">
                <!-- Upload Finished -->
                <div class="panel-heading"><strong>Upload history</strong></div>
					<div class="js-upload-finished">
						
						<div class="panel-body">
                        <div class="list-group"> 
                            <a href="#" class="list-group-item list-group-item-danger">
                            <span class="badge alert-danger pull-right">23-11-2014</span>amended-catalogue-01.xls</a> 
                            <a href="#" class="list-group-item list-group-item-success">
                            <span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue-01.xls</a> 
                            <a href="#" class="list-group-item list-group-item-success">
                            <span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue-01.xls</a> 
                            <a href="#" class="list-group-item list-group-item-success">
                            <span class="badge alert-success pull-right">23-11-2014</span>amended-catalogue.xls</a> 
                        </div>
                        </div>
                        
					</div>
            </div>
    		<div class="panel panel-default">
         		<div class="panel-heading"><strong>Download files</strong> <small> </small></div>
   			<div class="panel-body">
				<button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-download"></i> </span>Download catalogue</button>
				<button type="button" class="btn btn-labeled btn-info"> <span class="btn-label"><i class="glyphicon glyphicon-download"></i> </span>Download delta</button>
				<br />
    		</div>
    		</div>
		</div>        
        
        
	</div>
</div>

<!-- /container --> 

