            <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" id="div_983a_0">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-bottom-gradient"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr" id="">
                        <div class="kingster-page-caption" id="div_983a_2">Aminities</div>
                        <h1 class="kingster-page-title" id="h1_983a_0">Facilities</h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?=base_url();?>" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="" href="#" class="aminities"><span property="name">Aminities</span></a>
                        <meta property="position" content="2">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Facilities</span>
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
                                        <?php if($amenities != false){ ?>
                                        <div class="gdlr-core-tab-item-wrap">
                                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                <?php $no=1; foreach($amenities as $amenity){ ?>
                                                    <div class="gdlr-core-tab-item-title <?=($no==1)?'gdlr-core-active':'';?>" data-tab-id="<?=$no;?>"><a class="nav-link <?=($no==1)?'active':'';?>" data-toggle="tab" data-href="tab-<?=$no;?>" href="#"><?=first_ltr_upper($amenity->amenities_name);?></a></div>
                                                <?php $no++; } ?>
                                            </div>
                                            <div class="gdlr-core-tab-item-content-wrap tab-content clearfix">
                                                <?php $no=1; foreach($amenities as $amenity){ ?>
                                                    <div class="gdlr-core-tab-item-content <?=($no==1)?'gdlr-core-active':'';?> tab-pane <?=($no==1)?'active':'';?>" data-tab-id="<?=$no;?>" id="tab-<?=$no;?>" style="background-color: #ffffff;">
                                                        <?php if(!empty($amenity->image1) || !empty($amenity->image2) || !empty($amenity->image3)){ ?>
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                    						  	<?php if(!empty($amenity->image1)){ ?>
                                    						  	<div class="gdlr-core-column-<?=(!empty($amenity->image1) && !empty($amenity->image2) && !empty($amenity->image3))?20:((!empty($amenity->image1) && !empty($amenity->image2))?30:60);?> gdlr-core-column-first gdlr-core-item-pdlr">
                                    						  		<img src="<?=base_url('uploads/'.$amenity->image1);?>" width="100%">
                                    						  	</div>
                                    						  	<?php } if(!empty($amenity->image2)){ ?>
                                    						  	<div class="gdlr-core-column-<?=(!empty($amenity->image1) && !empty($amenity->image2) && !empty($amenity->image3))?20:((!empty($amenity->image1) && !empty($amenity->image2))?30:60);?> gdlr-core-item-pdlr">
                                    						  		<img src="<?=base_url('uploads/'.$amenity->image2);?>" width="100%">
                                    						  	</div>
                                    						  	<?php } if(!empty($amenity->image3)){ ?>
                                    						  	<div class="gdlr-core-column-<?=(!empty($amenity->image1) && !empty($amenity->image2) && !empty($amenity->image3))?20:((!empty($amenity->image1) && !empty($amenity->image2))?30:60);?> gdlr-core-item-pdlr">
                                    						  		<img src="<?=base_url('uploads/'.$amenity->image3);?>" width="100%">
                                    						  	</div>
                                    						  	<?php } ?>
                                						  	</div>
                                                        </div>
                                                        <?php } ?>
                                                        <div class="gdlr-core-pbf-element">
                                                            <?=$amenity->description;?>
                                						</div>
                                                    </div>
                                                <?php $no++; } ?>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>