@extends('layouts.admin')
@section('content')

{{ Form::open(array('name'=>'montages_edit','id'=>'montages_edit_form','url' => 'update_emontage/'.$montage->id,"method" => "post","files"=>true,"class"=>"form-horizontal")) }}
 
     <div id="page-wrapper">
             <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label2" class="modal-title">Edit Montage</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Status</label>
                            <div class="col-md-6">
                              <div data-on="success" data-off="primary" class="make-switch">
                                   @if($montage->status == 1) <?php $checked = true ?> @else <?php  $checked = false ?> @endif
                                  {{ Form::checkbox('status', '1',$checked );}}
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Title </label>
                            <div class="col-md-6">
                                {{ Form::text('title', $montage->title, array('placeholder' => 'Title','class'=>'form-control',"required")) }}

                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Banner Text </label>
                            <div class="col-md-9">
                                <div class="text-blue border-bottom">You can edit the content by clicking the text section below.</div>
                              <div id="mon_body_edit" contenteditable="true">
                                 {{$montage->body}}                                                                                        

                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <div class="text-15px margin-top-10px">
                                <img src="{{ URL::asset('uploads/slides/'.$montage->Banner) }}" alt="Banner" class="img-responsive"><br/>
                                {{ Form::file('Banner_image');}}
                                <br/>
                                <span class="help-block">(Image dimension: min. 1700 x 1000 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                            </div>
                       </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Enable Explore More Button</label>
                            <div class="col-md-6">
                             <div data-on="success" data-off="primary" class="make-switch">
                                 @if($montage->MoreStatus == 1) <?php $checked = true ?> @else <?php  $checked = false ?> @endif
                                {{ Form::checkbox('morestatus', '1', $checked);}}
                              </div>
                              
                              <div class="input-icon margin-top-10px"><i class="fa fa-link"></i>
                                   {{ Form::text('url', $montage->url, array('placeholder' => 'http://','class'=>'form-control')) }}

                              </div>

                            </div>
                          </div>

                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8">
                                 {{ Form::button(
                                                            'Update &nbsp;<i class="fa fa-floppy-o"></i>&nbsp;',
                                                            array(
                                                                'class'=>'btn btn-red',
                                                                'type'=>'submit')) 
                                                        }}
                                                        <a href="{{ URL::to('/index_edit') }}" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="fa fa-times-circle"></i></a> 
                                                        
                               </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                    {{ Form::hidden('mon_body') }}
                     {{ Form::close() }}
                      </div>
                    
         <!--END MODAL Add New Montage-->
         <!--Modal delete start-->
        
         <!-- modal delete end -->
<!--BEGIN PAGE HEADER & BREADCRUMB-->
       
      
          
   
          
         
            <!--BEGIN FOOTER-->
            <div class="page-footer">
                <div class="copyright"><span class="text-15px">2014 © <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a href="mailto:support@webqom.com">Webqom Support</a>.</span>
                	<div class="pull-right"><img src="images/logo_webqom.png" alt="Webqom Technologies"></div>
                </div>
            </div>
    <!--END FOOTER--></div>


@stop