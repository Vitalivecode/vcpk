            <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" id="div_983a_0">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-bottom-gradient"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr" id="">
                        <div class="kingster-page-caption" id="div_983a_2">Know Us Better</div>
                        <h1 class="kingster-page-title" id="h1_983a_0">Governing Body</h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?=base_url();?>" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Research" href="#" class="research"><span property="name">About Us</span></a>
                        <meta property="position" content="2">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Governing Body</span>
                        <meta property="position" content="3">
                        </span>
                    </div>
                </div>
            </div>
            <?php if($governings != false){ ?>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-100 gdlr-core-column-first gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px; float: left;">
                                <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                            <?php $no=1; foreach($governings as $governing){ ?>
                                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-30 <?=($no%2 == 1)?'gdlr-core-column-first':'';?> gdlr-core-item-pdlr">
                                                <div class="gdlr-core-personnel-list clearfix">
                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="<?=base_url('uploads/'.$governing->photo);?>" alt="<?=$governing->name;?>" width="500" height="500" title="personnel-1" /></a>
                                                    </div>
                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                        <h3 class="gdlr-core-personnel-list-title" style="font-size: 23px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"><a href="#" ><?=$governing->name;?></a></h3>
                                                        <div class="gdlr-core-personnel-list-content">
                                                            <?=(!empty($role[$governing->signature]) && ($role[$governing->signature] != ''))?'<p>'.$role[$governing->signature].'</p>':'';?>
                                                            <?=(!empty($governing->profession) && ($governing->profession != false))?'<p>'.$governing->profession.'</p>':'';?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $no++; } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
