            <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" id="div_983a_0">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-bottom-gradient"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr" id="">
                        <div class="kingster-page-caption" id="div_983a_2">Committees</div>
                        <h1 class="kingster-page-title" id="h1_983a_0"><?=$title;?></h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?=base_url();?>" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="" href="#" class="home"><span property="name">Committees</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name"><?=$title;?></span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " id="div_983a_3">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-<?=(isset($committee_titles) && !empty($committee_titles) && ($committee_titles != false))?40:60;?> gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <table>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name of the Person</th>
                                                        <th>Designation</th>
                                                        <th>Designation in Committee</th>
                                                    </tr>
                                                    <?php $cmte = ''; if($committee != false){ $no=1; foreach($committee as $committe){ $cmte = $committe->committee; ?>
                                                    <tr>
                                                        <td><?=$no++;?></td>
                                                        <td><?=$committe->name;?></td>
                                                        <td><?=$designation[$committe->clg_designation];?></td>
                                                        <td><?=$role[$committe->c_designation];?></td>
                                                    </tr>
                                                    <?php } } else{ ?>
                                                    <tr>
                                                        <td colspan="4">No Data Found</td>
                                                    </tr>
                                                    <?php } ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if(isset($committee_titles) && !empty($committee_titles) && ($committee_titles != false)){ ?>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <?php foreach($committee_titles as $ctitle){ ?>
                                                    <a class="gdlr-core-button gdlr-core-button-shortcode gdlr-core-button-no-border gdlr-core-button-full-width <?=(($ctitle->committee == $cmte)?'active':'');?>" href="<?=(($ctitle->committee == $cmte)?'javascript:void(0);':base_url('committee/'.urlencode(strtolower($ctitle->committee))));?>" style="font-size: 17px ;font-weight: 700 ;text-transform: none ;margin-left: 20px;border-radius: 0px;-moz-border-radius: 0px;-webkit-border-radius: 0px;"><span class="gdlr-core-content"><?=$ctitle->committee;?></span></a>
                                                    <span class="gdlr-core-space-shortcode" style="margin-top: 10px ;"></span>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
