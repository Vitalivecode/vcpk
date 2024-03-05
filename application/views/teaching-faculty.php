            <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" id="div_983a_0">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-bottom-gradient"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr" id="">
                        <div class="kingster-page-caption" id="div_983a_2">Faculty</div>
                        <h1 class="kingster-page-title" id="h1_983a_0">Teaching Faculty</h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?=base_url();?>" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="" href="#" class="home"><span property="name">Faculty</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Teaching Faculty</span>
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
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <?php if($faculties != false){ ?>
                                                <table>
                                                    <tr>
                                                        <th>S.no</th>
                                                        <th>Name of the Employee</th>
                                                        <th>Designation</th>
                                                        <th width="">Qualification with Specialization</th>
                                                        <th>Teaching Experience</th>
                                                        <th>JNTUH ID</th>
                                                    </tr>
                                                    <?php $no=1; foreach($faculties as $faculty){ ?>
                                                    <tr>
                                                        <td><?=$no++;?></td>
                                                        <td><?=$faculty->name;?></td>
                                                        <td><?=$faculty->role;?></td>
                                                        <td><?=$faculty->qualification;?></td>
                                                        <td><?=$faculty->experience;?></td>
                                                        <td><?=$faculty->research_area;?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </table>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>