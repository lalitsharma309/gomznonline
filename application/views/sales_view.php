<!-- Search Start-->
<section id="search">
    <div class="container">
        <div class="searchcontianer">
            <form class="form-inline">
                <div class="btn-group">
                    <input type="search" placeholder="Search Here" class="form-control mainserarch">
                    <button data-toggle="dropdown" class="btn  dropdown-toggle category" type="button"> Select Categories <span class="caret"></span> </button>
                    <ul class="dropdown-menu categorydropdown">
                        <li><a href="#">Real Estate</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Item For Sale</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Personal</a></li>
                    </ul>
                    <input type="submit" value="Search" class="btn btn-orange tooltip-test mainserarchsubmit">
                </div>
            </form>
        </div>
    </div>
    <a class="postad" href="post-ad.html"><span> <i class="fa fa-pencil"></i> Post An Ad</span></a> </section>
<div class="container">
    <!--  breadcrumb -->
    <ul class="breadcrumb">
        <li> <a >My Account</a> </li>
        <li class="active">Listing</li>
    </ul>
    <div class="row mt40">
        <!--  Sideabar -->
        <aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <!--Filter-->
            <div class="filter sidemodule">
                <h2 class="heading5"><span class="maintext">Filter Search</span></h2>
                <h5 class="subheading">Price</h5>
                <ul class="checkprice">
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Rs. 999 and Below (0) </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Rs. 1000 - Rs. 1999 </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Rs. 2000 - Rs. 3999 </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Rs. 3000 - Rs. 5000 </label>
                        </div>
                    </li>
                </ul>
                <h5 class="subheading">brand</h5>
                <input type="search" class="form-control brandsearch" placeholder="Search Brand">
                <ul class="searchbrand">
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Sony </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Samsung </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Nokia </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                HTC </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Micromax </label>
                        </div>
                    </li>
                </ul>
                <h5 class="subheading">Search Only</h5>
                <ul class="searcholy">
                    <li>
                        <div class="radio">
                            <label>
                                <input type="radio" value="option1" id="option1">
                                Rs. 2000 and Below (0) </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="radio" value="option2" id="option2">
                                Rs. 2000 and Below (0) </label>
                        </div>
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>
                                <input type="radio" value="option3" id="option3">
                                Rs. 2000 and Below (0) </label>
                        </div>
                    </li>
                </ul>
            </div>

            <!--Location-->
            <div class="sidemodule">
                <h2 class="heading5"><span class="maintext"> Location</span></h2>
                <ul class="nav nav-list categories">
                    <li> <a href="#">Paris, Hong Kongs</a> </li>
                    <li> <a href="#">Washington D.C. </a></li>
                    <li> <a href="#">Bangkok</a> </li>
                    <li> <a href="#">Singapore </a></li>
                    <li> <a href="#">New York</a> </li>
                    <li> <a href="#">Kuala Lumpur </a></li>
                </ul>
            </div>

            <!--Caegogries-->
            <div class="sidemodule">
                <h2 class="heading5"><span class="maintext"> Refine Category</span></h2>
                <ul class="nav nav-list categories">
                    <li> <a href="#">Real Estate </a></li>
                    <li> <a href="#">Services </a></li>
                    <li> <a href="#">Electronics </a>
                        <ul class="nav nav-list">
                            <li> <a href="#">Mobiles & Tablets </a>
                                <ul class="nav nav-list">
                                    <li class="active"> <a href="#">Mobile Phones </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!--  Container -->
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mt40column">
            <!--Sorting-->
            <div class="sorting well">
                <form class=" form-inline pull-left">
                    Sort By :
                    <select class="span2">
                        <option>Default</option>
                        <option>Name</option>
                        <option>Pirce</option>
                        <option>Date </option>
                    </select>
                    &nbsp;&nbsp;
                    Show:
                    <select class="span1">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>30</option>
                    </select>
                </form>
                <div class="btn-group pull-right">
                    <button class="btn btn-orange" id="list"><i class="fa fa-th-list fa-white"></i> </button>
                    <button class="btn " id="grid"><i class="fa fa-th fa "></i></button>
                </div>
            </div>
            <!-- Listing-->
            <div class="mt40" id="serchlist">
                <div class="searchresult list">
                    <ul>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a>
                                <div class="featured">Featured</div>
                            </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product2.jpg" alt=""></a> </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product3.jpg" alt=""></a>
                                <div class="latest">Latest</div>
                            </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a> </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product2.jpg" alt=""></a> </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product3.jpg" alt=""></a> </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a> </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product2.jpg" alt=""></a> </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                        <li class="clearfix">
                            <div class="col-sm-2"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product3.jpg" alt=""></a> </div>
                            <div class="col-sm-8">
                                <h3><a class="title" href="#">Samsung Galaxy Tab 3 T211 Tablet </a></h3>
                                <ul class="icondetail">
                                    <li><i class="fa fa-th-list"></i> Category : <a href="#">Mobile</a></li>
                                    <li><i class="fa fa-map-marker"></i> Location : California, U.S.</li>
                                    <li><i class="fa fa-calendar"></i> Posted On : Mach 22, 2014 </li>
                                    <li><i class="fa fa-user"></i> Posted by : <a href="#">pxcreate</a></li>
                                </ul>
                                <div class="discrption"> White, 8 GB, 2G, 3G, Wi-Fi, Bluetooth Headset - > Samsung Galaxy Tab 3 T211 Tablet <br>
                                    Dual SIM (GSM + GSM), 5 MP Primary Camera, 0.3 MP Secondary Camera,   Android v4.2 OS </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="share"> Share On : <br>
                                    <a data-original-title="Facebook" class="tooltip-test"><i class="fa fa-facebook"></i></a> <a data-original-title="Twitter" class="tooltip-test"><i class="fa fa-twitter"></i></a> <a data-original-title="Google Plus" class="tooltip-test"><i class="fa fa-google-plus"></i></a> </div>
                                <a class="btn  contact"><i class="fa fa-envelope-o"></i> Contact</a> </div>
                        </li>
                    </ul>
                    <!-- Paging-->
                    <div class="mt30 clearfix">
                        <ul class="pagination pull-right">
                            <li><a >Prev</a> </li>
                            <li class="active"> <a >1</a> </li>
                            <li><a >2</a> </li>
                            <li><a >3</a> </li>
                            <li><a >4</a> </li>
                            <li><a >Next</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="searchresult grid">
                    <ul class="mt30 clearfix row">
                        <li class="col-sm-4">
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
                        <li class="col-sm-4">
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
                        <li class="col-sm-4">
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
                    </ul>
                    <ul class="mt30 clearfix row">
                        <li class="col-sm-4">
                            <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a>
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
                        <li class="col-sm-4">
                            <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product2.jpg" alt=""></a>
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
                        <li class="col-sm-4">
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
                    </ul>
                    <ul class="mt30 clearfix row">
                        <li class="col-sm-4">
                            <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product1.jpg" alt=""></a>
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
                        <li class="col-sm-4">
                            <div class="searchgrid"> <a class="thumbnail" href="detail.html"><img src="<?php echo base_url();?>assets/img/product2.jpg" alt=""></a>
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
                        <li class="col-sm-4">
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
                    </ul>
                    <!-- Paging-->
                    <div class="mt30 clearfix">
                        <ul class="pagination pull-right">
                            <li><a >Prev</a> </li>
                            <li class="active"> <a >1</a> </li>
                            <li><a >2</a> </li>
                            <li><a >3</a> </li>
                            <li><a >4</a> </li>
                            <li><a >Next</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter-->
<section class="mt40">

</section>