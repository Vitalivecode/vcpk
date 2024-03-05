<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=(isset($title))?$title.' | ':'';?><?=$site[0]->title;?></title>
    <link rel="stylesheet" href="<?=base_url('plugins/goodlayers-core/plugins/combine/style.css');?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=base_url('plugins/goodlayers-core/include/css/page-builder.css');?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=base_url('plugins/revslider/public/assets/css/settings.css');?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=base_url('css/style-core.css');?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=base_url('css/custom.css');?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=base_url('css/kingster-style-custom.css');?>" type="text/css" media="all" />
    <link rel="icon" type="image/x-icon" href="<?=base_url('uploads/'.$site[0]->favicon);?>">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.0.3' type="text/css" media="all" />
    <script type="text/javascript">
        var base_url = "<?=base_url();?>";
        var currency = "<?=currency();?>";
    </script>
</head>
<?php $page = $this->uri->segment('1'); $page2 = $this->uri->segment('2'); ?>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <div class="kingster-mobile-header-wrap">
        <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
            <div class="kingster-mobile-header-container kingster-container clearfix">
                <div class="kingster-logo kingster-item-pdlr">
                    <div class="kingster-logo-inner">
                        <a class="" href="<?=base_url();?>"><img src="<?=base_url('uploads/'.$site[0]->logo);?>" alt="<?=$site[0]->title;?>" /></a>
                    </div>
                </div>
                <div class="kingster-mobile-menu-right">
                    <div class="kingster-mobile-menu"><a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                        <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                            <ul id="menu-main-navigation" class="m-menu">
                                <li class="menu-item menu-item-home"><a href="<?=base_url();?>">Home</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="<?=base_url('about');?>">About</a></li>
                                        <li class="menu-item"><a href="<?=base_url('vision-mission');?>">Vision & Mission</a></li>
                                        <li class="menu-item"><a href="<?=base_url('governing-body');?>">Governing Body</a></li>
                                        <li class="menu-item"><a href="<?=base_url('ombudsman');?>">Ombudsman</a></li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Vaageswari Group</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?=base_url('vips');?>">VIPS</a></li>
                                                <li class="menu-item"><a href="<?=base_url('vgse');?>">VGSE</a></li>
                                        <!--    <li class="menu-item"><a href="<?=base_url('vims');?>">VIMS</a></li>    -->
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Administration</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="<?=base_url('president');?>">President</a></li>
                                        <li class="menu-item"><a href="<?=base_url('vice-president');?>">Vice President</a></li>
                                        <li class="menu-item"><a href="<?=base_url('general-secretary');?>">General Secretary</a></li>
                                        <li class="menu-item"><a href="<?=base_url('joint-secretary');?>">Joint Secretary</a></li>
                                        <li class="menu-item"><a href="<?=base_url('principal');?>">Principal</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Academics</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a>Departments</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?=base_url('department/b-pharmacy');?>">B.Pharmacy</a></li>
                                                <li class="menu-item"><a href="<?=base_url('department/m-pharm-pharmaceutics');?>">M.Pharm Pharmaceutics</a></li>
                                                <li class="menu-item"><a href="<?=base_url('department/m-pharm-industrial-pharmacy');?>">M.Pharm-Industrial Pharmacy</a></li>
                                                <li class="menu-item"><a href="<?=base_url('department/m-pharm-pharmcology');?>">M.Pharm-Pharmcology</a></li>
                                                <li class="menu-item"><a href="<?=base_url('department/m-pharm-pharmceutical-analysis');?>">M.Pharm-Pharmceutical Analysis</a></li>
                                                <li class="menu-item"><a href="<?=base_url('department/pharm-d-&-dharm-d-pb');?>">Pharm D & Pharm D (PB)</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a>Committees</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?=base_url('committee');?>">Academic Committee</a></li>
                                                <li class="menu-item"><a href="<?=base_url('committee/discipline-committee');?>">Discipline Committee</a></li>
                                                <li class="menu-item"><a href="<?=base_url('committee/grievance-&-redressel-committee');?>">General Grievance Committee</a></li>
                                                <li class="menu-item"><a href="<?=base_url('committee/health-&-hygiene-committee');?>">Health & Hygiene Committee</a></li>
                                                <li class="menu-item"><a href="<?=base_url('committee/internal-complaint-committee');?>">Internal Complaint Committee</a></li>
                                                <li class="menu-item"><a href="<?=base_url('committee/sc–st-committee');?>">SC – ST Committee</a></li>
                                                <li class="menu-item"><a href="<?=base_url('committee/women-protection-cell');?>">Women Protection Cell</a></li>
                                                <li class="menu-item"><a href="<?=base_url('committee/anti-ragging-committee');?>">Anti Ragging Committee</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a>Resources</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?=base_url('academic-regulations');?>">Academic Regulations & Syllabus</a></li>
                                                <li class="menu-item"><a href="<?=base_url('teaching-faculty');?>">Teaching Faculty</a></li>
                                                <li class="menu-item"><a href="<?=base_url('non-teaching-faculty');?>">Non-Teaching Faculty</a></li>
                                                <li class="menu-item"><a href="<?=base_url('mou-with-hospital');?>">MOU With Hospital</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">Research</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="<?=base_url('research-projects');?>">Projects</a></li>
                                        <li class="menu-item"><a href="<?=base_url('research-grants');?>">Research Grants</a></li>
                                        <li class="menu-item"><a href="<?=base_url('research-publications');?>">Research Publications</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="<?=base_url('placements');?>">Placements</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">Aminities</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="<?=base_url('infrastructure');?>">Infrastructure</a></li>
                                        <li class="menu-item"><a href="<?=base_url('facilities');?>">Facilities</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item protect"><a href="<?=base_url('naac');?>">NAAC</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">Admissions</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="<?=base_url('admissions/courses-offered');?>">Courses Offered</a></li>
                                        <li class="menu-item menu-item-has-children"><a href="#">Admissions</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?=base_url('admissions/b-pharm');?>">B Pharm</a></li>
                                                <li class="menu-item"><a href="<?=base_url('admissions/m-pharm');?>">M Pharm</a></li>
                                                <li class="menu-item"><a href="<?=base_url('admissions/pharm-d');?>">Pharm D</a></li>
                                                <li class="menu-item"><a href="<?=base_url('admissions/pharm-d-pb');?>">Pharm D (PB)</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="<?=base_url('admissions/fee-structure');?>">Fee Structure</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children <?=(($page == 'alumni') || ($page == 'extra-curricular') || ($page == 'gallery') || ($page == 'aishe') || ($page == 'nirf') || ($page == 'rti') || ($page == 'sif'))?'current-menu-item':'';?>"><a href="#">More</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="<?=base_url('extra-curricular');?>">Extra Curricular</a></li>
                                            <li class="menu-item"><a href="<?=base_url('gallery');?>">Gallery</a></li>
                                            <li class="menu-item"><a href="<?=base_url('aishe');?>">AISHE</a></li>
                                            <li class="menu-item"><a href="<?=base_url('nirf');?>">NIRF</a></li>
                                            <li class="menu-item"><a href="<?=base_url('uploads/pdf/RTI.pdf');?>" target="_blank">RTI</a></li>
                                            <?php if(!empty(sif())){ ?>
                                            <li class="menu-item"><a href="<?=base_url('uploads/pdf/'.sif()[0]->file);?>" target="_blank">SIF</a></li>
                                            <?php } ?>
                                            <li class="menu-item"><a href="<?=base_url('alumni');?>">Alumni</a></li>
                                        </ul>
                                    </li>
                                <li class="menu-item"><a href="<?=base_url('contact');?>">Contact Us</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">Feedback</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a href="#">Stakeholder</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?=base_url('feedback');?>">Students</a></li>
                                                <li class="menu-item"><a href="<?=base_url('feedback');?>">Faculty</a></li>
                                                <li class="menu-item"><a href="<?=base_url('feedback');?>">Alumni</a></li>
                                                <li class="menu-item"><a href="<?=base_url('feedback');?>">Employer</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            <div class="kingster-top-bar">
                <div class="kingster-top-bar-background"></div>
                <div class="kingster-top-bar-container kingster-container ">
                    <div class="kingster-top-bar-container-inner clearfix">
                        <div class="kingster-logo  kingster-item-pdlr">
                            <div class="kingster-logo-inner" align="center">
                                <a class="" href="<?=base_url();?>"><img src="<?=base_url('uploads/logo.jpeg');?>" alt="" height="120px" style="height:120px;" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
                <div class="kingster-header-background" style="background-color: #33cccc;"></div>
                <div class="kingster-header-container  kingster-container">
                    <div class="kingster-header-container-inner clearfix">
                        <div class="kingster-navigation kingster-item-pdlr clearfix ">
                            <div class="kingster-main-menu" id="kingster-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item menu-item-home <?=(($page == '') || ($page == 'home'))?'current-menu-item':'';?> kingster-normal-menu"><a href="<?=base_url();?>">Home</a></li>
                                    <li class="menu-item menu-item-has-children <?=(($page == 'about') || ($page == 'vision-mission') || ($page == 'governing-body') || ($page == 'ombudsman') || ($page == 'vips') || ($page == 'vgse') || ($page == 'vims'))?'current-menu-item':'';?> kingster-normal-menu"><a href="#" class="sf-with-ul-pre">About</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item <?=($page == 'about')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('about');?>">About</a></li>
                                            <li class="menu-item <?=($page == 'vision-mission')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('vision-mission');?>">Vision & Mission</a></li>
                                            <li class="menu-item <?=($page == 'governing-body')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('governing-body');?>">Governing Body</a></li>
                                            <li class="menu-item <?=($page == 'ombudsman')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('ombudsman');?>">Ombudsman</a></li>
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Vaageswari Group</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item <?=($page == 'vips')?'current-menu-item':'';?>"><a href="<?=base_url('vips');?>">VIPS</a></li>
                                                    <li class="menu-item <?=($page == 'vgse')?'current-menu-item':'';?>"><a href="<?=base_url('vgse');?>">VGSE</a></li>
                                            <!--    <li class="menu-item <?=($page == 'vims')?'current-menu-item':'';?>"><a href="<?=base_url('vims');?>">VIMS</a></li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children <?=(($page == 'president') || ($page == 'vice-president') || ($page == 'general-secretary') || ($page == 'joint-secretary') || ($page == 'principal'))?'current-menu-item':'';?> kingster-normal-menu"><a href="#" class="sf-with-ul-pre">Administration</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item <?=($page == 'president')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('president');?>">President</a></li>
                                            <li class="menu-item <?=($page == 'vice-president')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('vice-president');?>">Vice President</a></li>
                                            <li class="menu-item <?=($page == 'general-secretary')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('general-secretary');?>">General Secretary</a></li>
                                            <li class="menu-item <?=($page == 'joint-secretary')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('joint-secretary');?>">Joint Secretary</a></li>
                                            <li class="menu-item <?=($page == 'principal')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('principal');?>">Principal</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children <?=(($page == 'department') || ($page == 'committee') || ($page == 'academic-regulations') || ($page == 'teaching-faculty') || ($page == 'non-teaching-faculty') || ($page == 'mou-with-hospital'))?'current-menu-item':'';?> kingster-mega-menu"><a href="#" class="sf-with-ul-pre">Academics</a>
                                        <div class="sf-mega sf-mega-full megaimg">
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children" data-size="15"><a class="sf-with-ul-pre">Departments</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item <?=(($page == 'department') && ($page2 == ''))?'current-menu-item':'';?>"><a href="<?=base_url('department/b-pharmacy');?>">B.Pharmacy</a></li>
                                                        <li class="menu-item <?=(($page == 'department') && ($page2 == 'm-pharm-pharmaceutics'))?'current-menu-item':'';?>"><a href="<?=base_url('department/m-pharm-pharmaceutics');?>">M.Pharm Pharmaceutics</a></li>
                                                        <li class="menu-item <?=(($page == 'department') && ($page2 == 'm-pharm-industrial-pharmacy'))?'current-menu-item':'';?>"><a href="<?=base_url('department/m-pharm-industrial-pharmacy');?>">M.Pharm-Industrial Pharmacy</a></li>
                                                        <li class="menu-item <?=(($page == 'department') && ($page2 == 'm-pharm-pharmcology'))?'current-menu-item':'';?>"><a href="<?=base_url('department/m-pharm-pharmcology');?>">M.Pharm-Pharmcology</a></li>
                                                        <li class="menu-item <?=(($page == 'department') && ($page2 == 'm-pharm-pharmceutical-analysis'))?'current-menu-item':'';?>"><a href="<?=base_url('department/m-pharm-pharmceutical-analysis');?>">M.Pharm-Pharmceutical Analysis</a></li>
                                                        <li class="menu-item <?=(($page == 'department') && ($page2 == 'pharm-d-&-dharm-d-pb'))?'current-menu-item':'';?>"><a href="<?=base_url('department/pharm-d-&-dharm-d-pb');?>">Pharm D & Pharm D (PB)</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Committees</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == ''))?'current-menu-item':'';?>"><a href="<?=base_url('committee');?>">Academic Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'discipline-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/discipline-committee');?>">Discipline Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'grievance-&-redressel-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/grievance-&-redressel-committee');?>">General Grievance Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'health-&-hygiene-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/health-&-hygiene-committee');?>">Health & Hygiene Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'internal-complaint-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/internal-complaint-committee');?>">Internal Complaint Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'sc–st-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/sc–st-committee');?>">SC – ST Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'women-protection-cell'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/women-protection-cell');?>">Women Protection Cell</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Committees</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'iqac-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/iqac-committee');?>">IQAC Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'obc-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/obc-committee');?>">OBC Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'maintenance-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/maintenance-committee');?>">Maintenance Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'transport-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/transport-committee');?>">Transport Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'library-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/library-committee');?>">Library Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'internal-audit-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/internal-audit-committee');?>">Internal Audit Committee</a></li>
                                                        <li class="menu-item <?=(($page == 'committee') && ($page2 == 'animal-ethical-committee'))?'current-menu-item':'';?>"><a href="<?=base_url('committee/animal-ethical-committee');?>">Animal Ethical Committee</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="#" class="sf-with-ul-pre">Resources</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item <?=($page == 'academic-regulations')?'current-menu-item':'';?>"><a href="<?=base_url('academic-regulations');?>">Academic Regulations & Syllabus</a></li>
                                                        <li class="menu-item <?=($page == 'teaching-faculty')?'current-menu-item':'';?>"><a href="<?=base_url('teaching-faculty');?>">Teaching Faculty</a></li>
                                                        <li class="menu-item <?=($page == 'non-teaching-faculty')?'current-menu-item':'';?>"><a href="<?=base_url('non-teaching-faculty');?>">Non-Teaching Faculty</a></li>
                                                        <li class="menu-item <?=($page == 'mou-with-hospital')?'current-menu-item':'';?>"><a href="<?=base_url('mou-with-hospital');?>">MOU With Hospital</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children <?=(($page == 'research-projects') || ($page == 'research-grants') || ($page == 'research-publications'))?'current-menu-item':'';?> kingster-normal-menu"><a href="#" class="sf-with-ul-pre">Research</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item <?=($page == 'research-projects')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('research-projects');?>">Projects</a></li>
                                            <li class="menu-item <?=($page == 'research-grants')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('research-grants');?>">Research Grants</a></li>
                                            <li class="menu-item <?=($page == 'research-publications')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('research-publications');?>">Research Publications</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item <?=($page == 'placements')?'current-menu-item':'';?> kingster-normal-menu"><a href="<?=base_url('placements');?>">Placements</a></li>
                                    <li class="menu-item menu-item-has-children <?=(($page == 'infrastructure') || ($page == 'facilities'))?'current-menu-item':'';?> kingster-normal-menu"><a href="#" class="sf-with-ul-pre">Aminities</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item <?=($page == 'infrastructure')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('infrastructure');?>">Infrastructure</a></li>
                                            <li class="menu-item <?=($page == 'facilities')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('facilities');?>">Facilities</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item protect <?=($page == 'naac')?'current-menu-item':'';?> kingster-normal-menu"><a href="<?=base_url('naac');?>">NAAC</a></li>
                                    <li class="menu-item menu-item-has-children <?=(($page == 'courses-offered') || ($page == 'admissions') || ($page == 'fee-structure'))?'current-menu-item':'';?> kingster-normal-menu"><a href="#" class="sf-with-ul-pre">Admissions</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item <?=(($page == 'admissions') && ($page2 == 'courses-offered'))?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('admissions/courses-offered');?>">Courses Offered</a></li>
                                            <li class="menu-item <?=((($page == 'admissions') && ($page2 == 'b-pharm')) || (($page == 'admissions') && ($page2 == 'm-pharm')) || (($page == 'admissions') && ($page2 == 'pharm-d')) || (($page == 'admissions') && ($page2 == 'pharm-d-pb')))?'current-menu-item':'';?> menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Admissions</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item <?=(($page == 'admissions') && ($page2 == 'b-pharm'))?'current-menu-item':'';?>"><a href="<?=base_url('admissions/b-pharm');?>">B.Pharm</a></li>
                                                    <li class="menu-item <?=(($page == 'admissions') && ($page2 == 'm-pharm'))?'current-menu-item':'';?>"><a href="<?=base_url('admissions/m-pharm');?>">M.Pharm</a></li>
                                                    <li class="menu-item <?=(($page == 'admissions') && ($page2 == 'pharm-d'))?'current-menu-item':'';?>"><a href="<?=base_url('admissions/pharm-d');?>">Pharm D</a></li>
                                                    <li class="menu-item <?=(($page == 'admissions') && ($page2 == 'pharm-d-pb'))?'current-menu-item':'';?>"><a href="<?=base_url('admissions/pharm-d-pb');?>">Pharm D (PB)</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item <?=(($page == 'admissions') && ($page2 == 'fee-structure'))?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('admissions/fee-structure');?>">Fee Structure</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children <?=(($page == 'alumni') || ($page == 'extra-curricular') || ($page == 'gallery') || ($page == 'aishe') || ($page == 'nirf') || ($page == 'rti') || ($page == 'sif'))?'current-menu-item':'';?> kingster-normal-menu"><a href="#" class="sf-with-ul-pre">More</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item <?=($page == 'extra-curricular')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('extra-curricular');?>">Extra Curricular</a></li>
                                            <li class="menu-item <?=($page == 'gallery')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('gallery');?>">Gallery</a></li>
                                            <li class="menu-item <?=($page == 'aishe')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('aishe');?>">AISHE</a></li>
                                            <li class="menu-item <?=($page == 'nirf')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('nirf');?>">NIRF</a></li>
                                            <li class="menu-item <?=($page == 'rti')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('uploads/pdf/RTI.pdf');?>" target="_blank">RTI</a></li>
                                            <?php if(!empty(sif())){ ?>
                                                <li class="menu-item <?=($page == 'sif')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('uploads/'.sif()[0]->file);?>" target="_blank">SIF</a></li>
                                            <?php } ?>
                                            <li class="menu-item <?=($page == 'alumni')?'current-menu-item':'';?>" data-size="60"><a href="<?=base_url('alumni');?>">Alumni</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item <?=($page == 'contact')?'current-menu-item':'';?> kingster-normal-menu"><a href="<?=base_url('contact');?>"><span class="gdlr-core-button" style="padding: 2px 15px;display: inline-block;-webkit-border-radius: 0px;">Contact Us</span></a></li>
                                    <li class="menu-item menu-item-has-children <?=($page == 'feedback')?'current-menu-item':'';?> kingster-normal-menu"><a href="#" class="sf-with-ul-pre">Feedback</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children" data-size="60"><a href="#" class="sf-with-ul-pre">Stakeholder</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="<?=base_url('feedback');?>">Students</a></li>
                                                    <li class="menu-item"><a href="<?=base_url('feedback');?>">Faculty</a></li>
                                                    <li class="menu-item"><a href="<?=base_url('feedback');?>">Alumni</a></li>
                                                    <li class="menu-item"><a href="<?=base_url('feedback');?>">Employer</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
