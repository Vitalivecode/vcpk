                    <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" id="div_983a_0">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-bottom-gradient"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr" id="">
                        <h1 class="kingster-page-title" id="h1_983a_0">Alumni</h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?=base_url();?>" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Alumni</span>
                        <meta property="position" content="3">
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 60px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #efefef ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                        <div class="gdlr-core-tab-item-wrap">
                                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                <div class="gdlr-core-tab-item-title <?=(isset($_POST['email']))?'':' gdlr-core-active active';?>" data-tab-id="1"><a class="nav-link <?=(isset($_POST['email']))?'':'active';?>" data-toggle="tab" data-href="tab-1" href="#">Alumni List</a></div>
                                                <div class="gdlr-core-tab-item-title <?=(isset($_POST['email']))?' gdlr-core-active active':'';?>" data-tab-id="2"><a class="nav-link <?=(isset($_POST['email']))?'active':'';?>" data-toggle="tab" data-href="tab-2" href="#">Registration Form</a></div>
                                            </div>
                                            <div class="gdlr-core-tab-item-content-wrap tab-content clearfix">
                                                <div class="gdlr-core-tab-item-content tab-pane <?=(isset($_POST['email']))?'':' gdlr-core-active show active';?>" data-tab-id="1" id="tab-1" style="background-color: #ffffff;">
                                                    <div class="gdlr-core-pbf-element">
                            						  	<table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sno</th>
                                                                    <th>Name</th>
                                                                    <th>Course</th>
                                                                    <th>Year of Pass</th>
                                                                    <th>Company</th>
                                                                    <th>Designation</th>
                                                                    <th>Photo</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $no = 1; if($alumni != false){ foreach($alumni as $alumn){ ?>
                                                                <tr>
                                                                    <td><?=$no++;?></td>
                                                                    <td><?=$alumn->name;?></td>
                                                                    <td><?=$alumn->edu;?></td>
                                                                    <td><?=$alumn->year_of_pass;?></td>
                                                                    <td><?=$alumn->company;?></td>
                                                                    <td><?=$alumn->disgnation;?></td>
                                                                    <td><?=($alumn->photo != '')?'<img src="'.base_url('uploads/'.$alumn->photo).'" class="img-responsive" style="height:45px;" />':'';?></td>
                                                                </tr>
                                                                <?php } } else{ ?>
                                                                <tr>
                                                                    <td colspan="7" class="text-center">
                                                                        No Data
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                            
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-tab-item-content tab-pane <?=(isset($_POST['email']))?' gdlr-core-active show active':'';?>" data-tab-id="2" id="tab-2" style="background-color: #ffffff ;">
                                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 760px ;">
                                                                        <div class="gdlr-core-pbf-element">
                                                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                                                <div class="gdlr-core-title-item-title-wrap clearfix">
                                                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 43px ;letter-spacing: 0px ;text-transform: none ;">Alumni Registration Form</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px ;font-style: normal ;">and we will get back to you.</span></div>
                                                                        </div>
                                                                        <div class="gdlr-core-pbf-element">
                                                                            <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                                                <div role="form" class="wpcf7" id="wpcf7-f1979-p1985-o1" lang="en-US" dir="ltr">
                                                                                    <div class="screen-reader-response"><?=$mess;?><?=$error;?></div>
                                                                                    <form class="quform" action="<?=base_url('alumni');?>" method="post" enctype="multipart/form-data" onclick="">
                            
                                                                                        <div class="quform-elements">
                                                                                            <div class="quform-element">
                                                                                                <p>Your Name (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                                                        <input type="text" name="fullname" value="<?=($mess == '')?set_value('fullname'):'';?>" size="20" class="input1" placeholder="Your Name">
                                                                                                        <?=form_error('fullname'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="quform-element">
                                                                                                <p>Father Name (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                                                        <input type="text" name="father" value="<?=($mess == '')?set_value('father'):'';?>" size="20" class="input1" placeholder="Father Name">
                                                                                                        <?=form_error('father'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="quform-element">
                                                                                                <p>Hall Ticket Number (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                                                        <input type="text" name="hall_ticket" value="<?=($mess == '')?set_value('hall_ticket'):'';?>" size="20" class="input1" placeholder="Hall Ticket Number">
                                                                                                        <?=form_error('hall_ticket'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="quform-element">
                                                                                                <p>Phone Number (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                                                        <input type="text" name="phone" value="<?=($mess == '')?set_value('phone'):'';?>" size="20" class="input1" placeholder="Phone Number">
                                                                                                        <?=form_error('phone'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                                                                            <div class="quform-element">
                                                                                                <p>Your Email (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                        <input type="email" name="email" value="<?=($mess == '')?set_value('email'):'';?>" size="20" class="input1" placeholder="Email">
                                                                                                        <?=form_error('email'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="quform-element">
                                                                                                <p>Photo (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                                                        <input type="file" name="photo" accept="image/*" class="input1" placeholder="Photo">
                                                                                                        <?=form_error('photo'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="quform-element">
                                                                                                <p>Education (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-message">
                                                                                                        <input type="text" name="education" value="<?=($mess == '')?set_value('education'):'';?>" size="20" class="input1" placeholder="Ex:Diploma/UG/PG">
                                                                                                        <?=form_error('education'); ?>
                                                                                                    </span>
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="quform-element">
                                                                                                <p>Year of Pass (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                                                        <input type="number" name="pass" value="<?=($mess == '')?set_value('pass'):'';?>" min="1990" size="20" class="input1" max="<?=date('Y');?>" placeholder="Ex: <?=(date('Y')-1);?>">
                                                                                                        <?=form_error('pass'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="quform-element">
                                                                                                <p>Company (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                                                        <input type="text" name="company" value="<?=($mess == '')?set_value('company'):'';?>" size="20" class="input1" placeholder="Company">
                                                                                                        <?=form_error('company'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="quform-element">
                                                                                                <p>Designation (required)
                                                                                                    <br>
                                                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                                                        <input type="text" name="designation" value="<?=($mess == '')?set_value('designation'):'';?>" size="20" class="input1" placeholder="Designation">
                                                                                                        <?=form_error('designation'); ?>
                                                                                                    </span> 
                                                                                                </p>
                                                                                            </div>
                                                                                            <p>
                                                                                                <!-- Begin Submit button -->
                                                                                                </p><div class="quform-submit">
                                                                                                    <div class="quform-submit-inner">
                                                                                                        <button type="submit" class="submit-button"><span>Submit</span></button>
                                                                                                    </div>
                                                                                                    <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                                                                </div>
                                                                                            <p></p>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>