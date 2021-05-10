<html>
<head>
   
    <?= $this->Html->css('style2.css') ?>
    <style>
    .btn{
        height:auto !important;
    }
    </style>
</head>
<body>

    <!--**********************************
        Content body start
    ***********************************-->
  
        <div class="container-fluid">
            <div class="row" style="max-width: 100%;">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="email-left-box">
                            <?php echo $this->Html->link('Compose',array('controller' => 'Inbox', 'action' => 'compose'),['class'=>'btn btn-primary btn-block','escape' => false]); ?>
                                <div class="mail-list mt-4"> <?php echo $this->Html->link('<i class="fa fa-inbox font-18 align-middle mr-2"></i> <b>Inbox</b> <span class="badge badge-primary badge-sm float-right m-t-5">198</span>',array('controller' => 'Inbox', 'action' => 'index'),['class'=>'list-group-item border-0 text-primary p-r-0','escape' => false]); ?>
                                    <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent</a>  <a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-star-o font-18 align-middle mr-2"></i>Important <span class="badge badge-danger badge-sm float-right m-t-5">47</span> </a>
                                    <a href="#" class="list-group-item border-0 p-r-0"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft</a><a href="#" class="list-group-item border-0 p-r-0"><i class="fa fa-trash font-18 align-middle mr-2"></i>Trash</a>
                                </div>
                                <h5 class="mt-5 m-b-10">Categories</h5>
                                <div class="list-group mail-list"><a href="#" class="list-group-item border-0"><span class="fa fa-briefcase f-s-14 mr-2"></span>Work</a>  <a href="#" class="list-group-item border-0"><span class="fa fa-sellsy f-s-14 mr-2"></span>Private</a>  <a href="#"
                                                                                                                                                                                                                                                                                     class="list-group-item border-0"><span class="fa fa-ticket f-s-14 mr-2"></span>Support</a>  <a href="#" class="list-group-item border-0"><span class="fa fa-tags f-s-14 mr-2"></span>Social</a>
                                </div>
                            </div>
                            <div class="email-right-box">
                                <div role="toolbar" class="toolbar">
                                    <div class="btn-group">
                                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-dark dropdown-toggle" type="button">More <span class="caret m-l-5"></span>
                                        </button>
                                        <div class="dropdown-menu"><span class="dropdown-header">More Option :</span>  <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a>  <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>  <a href="javascript: void(0);"
                                                                                                                                                                                                                                                                          class="dropdown-item">Add Star</a>  <a href="javascript: void(0);" class="dropdown-item">Mute</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-list m-t-15">
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk2">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk3">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk4">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk5">
                                                    
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk6">
                                                 
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk7">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk8">
                                                    
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message unread">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk9">
                                                 
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message unread">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk10">
                                                  
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk11">
                                                  
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk12">
                                                  
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk13">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk14">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message unread">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk15">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk16">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk17">
                                                   
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk18">
                                               
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk19">
                                                 
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message unread">
                                        <a href="email-read.html">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk20">
                                                  
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="message">
                                        <a href="">
                                            <div class="col-mail col-mail-1">
                                                <div class="email-checkbox">
                                                    <input type="checkbox" id="chk21">
                                                    
                                                </div><span class="star-toggle ti-star"></span>
                                            </div>
                                            <div class="col-mail col-mail-2">
                                                <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                <div class="date">11:49 am</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- panel -->
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-left">1 - 20 of 568</div>
                                    </div>
                                    <div class="col-5">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-gradient" type="button"><i class="fa fa-angle-left"></i>
                                            </button>
                                            <button class="btn btn-dark" type="button"><i class="fa fa-angle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    
    <!--**********************************
        Content body end
    ***********************************-->


<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->


</body>
</html>
