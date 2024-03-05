            <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" id="div_983a_0" style="background-image: url(<?=base_url('uploads/academics/'.((($this->uri->segment(2) == "b-pharmacy") || ($this->uri->segment(2) == "m-pharm-pharmaceutics"))?"bpharmacy.jpg":(($this->uri->segment(2) == "m-pharm-industrial-pharmacy")?"mpharm/mPharmaIndustrial.jpg":(($this->uri->segment(2) == "m-pharm-pharmcology")?"mpharm/mPharmcology.jpg":(($this->uri->segment(2) == "m-pharm-pharmceutical-analysis")?"mpharm/mPharmaAnalsis.jpg":(($this->uri->segment(2) == "pharm-d-&-dharm-d-pb")?"mpharm/mPharmaC.jpg":"../about-title-bg.jpg"))))).'');?>);">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-bottom-gradient"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr" id="">
                        <div class="kingster-page-caption" id="div_983a_2">Department</div>
                        <h1 class="kingster-page-title" id="h1_983a_0"><?=$title;?></h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?=base_url();?>" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Research" href="#" class="research"><span property="name">Department</span></a>
                        <meta property="position" content="2">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name"><?=$title;?></span>
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
                                    <?php if($department != false){ ?>
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                        <div class="gdlr-core-tab-item-wrap">
                                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                <div class="gdlr-core-tab-item-title gdlr-core-active" data-tab-id="1"><a class="nav-link active" data-toggle="tab" data-href="tab-1" href="#">About</a></div>
                                                <div class="gdlr-core-tab-item-title hod_name" data-tab-id="2"><a class="nav-link" data-toggle="tab" data-href="tab-2" href="#">HOD</a></div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="3"><a class="nav-link" data-toggle="tab" data-href="tab-3" href="#">Vision & Mission</a></div>
                                                <?php if(!empty($department[0]->instruments) && ($department[0]->instruments != false)){ ?>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="4"><a class="nav-link" data-toggle="tab" data-href="tab-4" href="#">Instruments</a></div>
                                                <?php } ?>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="5"><a class="nav-link" data-toggle="tab" data-href="tab-5" href="#">Faculty</a></div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="6"><a class="nav-link" data-toggle="tab" data-href="tab-6" href="#">COs, POs & PSOs</a></div>
                                            </div>
                                            <div class="gdlr-core-tab-item-content-wrap tab-content clearfix">
                                                <div class="gdlr-core-tab-item-content gdlr-core-active tab-pane active show text-justify" data-tab-id="1" id="tab-1" style="background-color: #ffffff ;">    <!--    background-image: url(upload/tab-bg.png) ;background-position: top right ;    -->
                                                    <?=$department[0]->about;?>
                                                </div>
                                                <div class="gdlr-core-tab-item-content tab-pane" data-tab-id="2" id="tab-2" style="background-color: #ffffff ;">    <!--    background-image: url(upload/tab-bg.png) ;background-position: top right ;    -->
                                                    <div class="gdlr-core-pbf-element">
                                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                                                <div class="gdlr-core-personnel-list clearfix">
                                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="#"><img src="<?=base_url('uploads/'.$department[0]->photo);?>" alt="<?=$department[0]->name;?>" width="500" height="500" title="personnel-1" /></a>
                                                                    </div>
                                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                                        <h3 class="gdlr-core-personnel-list-title" style="font-size: 30px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">
                                                                            <a href="#" class="hod-name"> 
                                                                            <?php $str = $department[0]->name; preg_match_all("/\.\s*\w/", $str, $matches); foreach($matches[0] as $match){ $str = str_replace($match, strtoupper($match), $str); } ?>
                                                                            <?=$str;?>
                                                                            </a>
                                                                        </h3>
                                                                        <div class="hod_qual" style="font-size:14px;text-align:right;font-weight:bold;">-<?=$department[0]->qualification;?></div>
                                                                        <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 22px ;font-weight: 700 ;font-style: normal ;color: #6c6c6c ;"><?=$designation[$department[0]->designation];?></div>
                                                                        <div class="gdlr-core-personnel-list-content text-justify">
                                                                            <?=$department[0]->hod_message;?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-tab-item-content tab-pane text-justify" data-tab-id="3" id="tab-3" style="background-color: #ffffff ;">    <!--    background-image: url(upload/tab-bg.png) ;background-position: top right ;    -->
                                                    <?=$department[0]->vision_mission;?>
                                                </div>
                                                <?php if(!empty($department[0]->instruments) && ($department[0]->instruments != false)){ ?>
                                                <div class="gdlr-core-tab-item-content tab-pane text-justify" data-tab-id="4" id="tab-4" style="background-color: #ffffff ;">    <!--    background-image: url(upload/tab-bg.png) ;background-position: top right ;    -->
                                                    <?=$department[0]->instruments;?>
                                                    <?php if((!empty($department[0]->image1) && ($department[0]->image1 != false)) || (!empty($department[0]->image2) && ($department[0]->image2 != false))){ ?>
                                                    <div class="gdlr-core-pbf-element">
                                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium" style="display:flex;">
                                						  	<div class="gdlr-core-column-20 gdlr-core-column-first gdlr-core-item-pdlr"></div>
                                						  	<?php if(!empty($department[0]->image1) && ($department[0]->image1 != false)){ ?>
                                						  	<div class="gdlr-core-column-20 gdlr-core-column-first gdlr-core-item-pdlr">
                                						  		<img src="<?=base_url('uploads/'.$department[0]->image1);?>" width="100%">
                                						  	</div>
                                						  	<?php } if(!empty($department[0]->image2) && ($department[0]->image2 != false)){ ?>
                                						  	<div class="gdlr-core-column-20 gdlr-core-column-first gdlr-core-item-pdlr">
                                						  		<img src="<?=base_url('uploads/'.$department[0]->image2);?>" width="100%">
                                						  	</div>
                                						  	<?php } ?>
                                						  	<div class="gdlr-core-column-20 gdlr-core-column-first gdlr-core-item-pdlr"></div>
                            						  	</div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                <?php } ?>
                                                <div class="gdlr-core-tab-item-content tab-pane text-justify" data-tab-id="5" id="tab-5" style="background-color: #ffffff ;">    <!--    background-image: url(upload/tab-bg.png) ;background-position: top right ;    -->
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;"><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <table>
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Name of the Faculty</th>
                                                            <th>Designation</th>
                                                            <th>Qualification</th>
                                                            <th>Experience</th>
                                                            <th>PCI Reg.No. / JNTUH ID</th>
                                                            <th>Photo</th>
                                                        </tr>
                                                        <?php if($faculties = $this->get->table('faculty', array('department' => $department[0]->department, 'status' => '1'),'',array('sequence' => 'asc'))){ $no=1; foreach($faculties as $faculty){ ?>
                                                        <tr>
                                                            <td><?=$no++;?></td>
                                                            <td><?=$faculty->name;?></td>
                                                            <td>Professor</td>
                                                            <td><?=$faculty->qualification;?></td>
                                                            <td><?=$faculty->experience;?></td>
                                                            <td><?=$faculty->research_area;?></td>
                                                            <td><img src="<?=base_url('uploads/'.$faculty->photo);?>" alt="<?=$faculty->name;?>" width="100" /></td>
                                                        </tr>
                                                        <?php } } else{ ?>
                                                        <tr>
                                                            <td colspan="7">No Data Found</td>
                                                        </tr>
                                                        <?php } ?>
                                                    </table>
                                                </div>
                                                
                                                <div class="gdlr-core-tab-item-content tab-pane text-justify t-100" data-tab-id="6" id="tab-6" style="background-color: #ffffff ;">    <!--    background-image: url(upload/tab-bg.png) ;background-position: top right ;    -->
                                                    <?=$department[0]->cos;?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
