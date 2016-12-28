<!-- REVOLUTION SLIDER -->
<div class="slider fullwidthbanner-container roundedcorners">
    <div class="fullwidthbanner">
        <ul class="hide">

            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off" >

                <img src="<?php echo base_url();?>assets/images/1x1.png" data-lazyload="<?php echo base_url();?>assets/images/demo/flickr_37.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

                <div class="tp-caption mediumlarge_light_white lfb tp-resizeme"
                     data-x="left" data-hoffset="70"
                     data-y="143"
                     data-speed="1000"
                     data-start="1400"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300">Smart City, Muzaffarnagar
                </div>

                <div class="tp-caption mediumlarge_light_white lft tp-resizeme"
                     data-x="left" data-hoffset="70"
                     data-y="95"
                     data-speed="1000"
                     data-start="1200"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300">Welcome to
                </div>


            </li>

            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-target="_blank" data-saveperformance="off" >

                <img src="<?php echo base_url();?>assets/images/1x1.png" data-lazyload="<?php echo base_url();?>assets/images/demo/flickr_9.jpg" alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />

                <div class="tp-caption small_light_white sfl tp-resizeme"
                     data-x="70"
                     data-y="172"
                     data-speed="750"
                     data-start="1000"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300">Epona Multipurpose Template
                </div>

                <div class="tp-caption small_light_white sfl tp-resizeme"
                     data-x="70"
                     data-y="216"
                     data-speed="750"
                     data-start="1400"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300">Loaded With Options, And Is Simply A Joy To Use
                </div>

                <div class="tp-caption block_black sfr tp-resizeme"
                     data-x="70"
                     data-y="260"
                     data-speed="750"
                     data-start="1800"
                     data-easing="easeOutExpo"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300">Premium Sliders That Are Easy To Use With Any Content
                </div>

            </li>

            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="14"  data-masterspeed="300" data-delay="10000">

                <!-- COVER IMAGE -->
                <img src="<?php echo base_url();?>assets/images/1x1.png" data-lazyload="<?php echo base_url();?>assets/images/demo/blue.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                <div class="tp-caption medium_text lfl stl"
                     data-x="63"
                     data-y="200"
                     data-speed="300"
                     data-start="500"
                     data-easing="easeOutExpo">EPONA TEMPLATE
                </div>

                <div class="tp-caption large_bold_white sft stb"
                     data-x="60"
                     data-y="223"
                     data-speed="300"
                     data-start="1000"
                     data-easing="easeOutExpo">MULTIPURPOSE
                </div>

                <div class="tp-caption italic small_light_white sft stb"
                     data-x="63"
                     data-y="286"
                     data-speed="500"
                     data-start="2000"
                     data-easing="easeOutExpo">Marketing &bull; Design &bull; Multipurpose
                </div>

                <div class="tp-caption sft medium_light_white"
                     data-x="600"
                     data-y="60"
                     data-speed="600"
                     data-start="1500"
                     data-easing="easeOutExpo"><img src="assets/images/demo/desktop_slider.png" alt="" />
                </div>

            </li>

        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>
<!-- /REVOLUTION SLIDER -->
<style>
    .fa-a:before {
        font-family: Arial; /* your font family here! */
        font-weight: bold;
        content: 'A';
    }
</style>


    <!-- Services-->
    <div class="container mt40" id="maincategory">
        <ul class="maincategory row">
            <?php if(isset($sub_districts)){
                for($i=0;$i<count($sub_districts);$i++){?>
                    <style>
                        .fa-<?php echo substr($sub_districts[$i]['name'], 0, 1);?>:before {
                            font-family: Arial; /* your font family here! */
                            font-weight: bold;
                            content: '<?php echo ucfirst(substr($sub_districts[$i]['name'], 0, 1));?>';
                        }
                    </style>
                    <li> <a href="listing.html"><i class="fa fa-<?php echo substr($sub_districts[$i]['name'], 0, 1)?> c<?php echo $sub_districts[$i]['id']?>"></i> <br>
                            <span class="direname"><?php echo ucfirst($sub_districts[$i]['name']);?></span></a> </li>
            <?php }
            }?>
        </ul>
        <div class="clearfix"></div>
        <a id="prevcat" class="prevcarousal" href="#">Previous</a> <a id="nextcat" class="nextcarosal" href="#">Next</a> </div>

    <!-- Listing-->
    <div class="container mt40">
        <h2 class="heading3">Ad Listing</h2>
        <!-- Listing-->
        <div class="mt40" id="serchlist">
            <div class="searchresult grid">
                <ul class="mt30 clearfix row">
                    <li class="col-sm-3 mb20">
                        <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a>
                            <div class="featured">Featured</div>
                            <div>
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="share"> Share On : <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </div>
                    </li>
                    <li class="col-sm-3 mb20">
                        <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product2.jpg" alt=""></a>
                            <div class="latest">Latest</div>
                            <div>
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="share"> Share On : <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </div>
                    </li>
                    <li class="col-sm-3 mb20">
                        <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product3.jpg" alt=""></a>
                            <div>
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="share"> Share On : <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </div>
                    </li>
                    <li class="col-sm-3 mb20">
                        <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a>
                            <div class="featured">Featured</div>
                            <div>
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="share"> Share On : <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </div>
                    </li>
                    <li class="col-sm-3 mb20">
                        <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a>
                            <div class="featured">Featured</div>
                            <div>
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="share"> Share On : <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </div>
                    </li>
                    <li class="col-sm-3 mb20">
                        <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product2.jpg" alt=""></a>
                            <div class="latest">Latest</div>
                            <div>
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="share"> Share On : <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </div>
                    </li>
                    <li class="col-sm-3 mb20">
                        <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product3.jpg" alt=""></a>
                            <div>
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="share"> Share On : <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </div>
                    </li>
                    <li class="col-sm-3 mb20">
                        <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a>
                            <div class="featured">Featured</div>
                            <div>
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="share"> Share On : <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Premium Listing-->
    <div class="container mt40 ">
        <h2 class="heading3">Premium Sales</h2>
        <div class="row mt40">
            <div class="column3 premiumlisting">
                <ul id="premiumlisting">
                    <li> <a href="listing.html" class="listing"> <img src="<?php echo base_url();?>assets/img/list1.jpg" alt=""> <span class="caption"  >Computer Listing</span> </a> </li>
                    <li> <a href="listing.html" class="listing"> <img src="<?php echo base_url();?>assets/img/list2.jpg" alt=""> <span class="caption"  >For Rent</span> </a> </li>
                    <li> <a href="listing.html" class="listing"> <img src="<?php echo base_url();?>assets/img/list3.jpg" alt=""> <span class="caption"  >For Pets</span> </a> </li>
                    <li> <a href="listing.html" class="listing"> <img src="<?php echo base_url();?>assets/img/list4.jpg" alt=""> <span class="caption"  >Mobiles</span> </a> </li>
                    <li> <a href="listing.html" class="listing"> <img src="<?php echo base_url();?>assets/img/list5.jpg" alt=""> <span class="caption"  >Camera Listing</span> </a> </li>
                    <li> <a href="listing.html" class="listing"> <img src="<?php echo base_url();?>assets/img/list6.jpg" alt=""> <span class="caption"  >Music Listing</span> </a> </li>
                    <li> <a href="listing.html" class="listing"> <img src="<?php echo base_url();?>assets/img/list3.jpg" alt=""> <span class="caption"  >Premium Listing</span> </a> </li>
                    <li> <a href="listing.html" class="listing"> <img src="<?php echo base_url();?>assets/img/list4.jpg" alt=""> <span class="caption"  >Premium Listing</span> </a> </li>
                </ul>
                <div class="clearfix"></div>
                <a id="prevpre" class="prepre" href="#">Previous</a> <a id="nextpre" class="nextpre" href="#">Next</a> </div>
        </div>
    </div>

    <!-- Newsletter-->
    <section class="mt40">

    </section>