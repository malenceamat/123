@include('layouts.app')

@section('about')

    <div class="white-wrapper">
        <div class="col-image">
            <div class="bg-wrapper col-md-6">
                <div class="bg-holder" style="background-image: url(style/images/art/about.jpg);"></div>
            </div>
            <!--/.bg-wrapper -->
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-7 inner-col">
                        <div class="section-title">
                            <h3>About the Company</h3>
                        </div>
                        <p class="lead">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Etiam porta sem malesuada magna mollis euismod.</p>
                        <ul class="progress-list">
                            <li>
                                <p>Strategy <em>90%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 90%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Project Management <em>80%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 80%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Programming <em>85%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 85%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Analytics & Reporting <em>75%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 50%;"></div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.progress-list -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/.container -->
        </div>
        <!--/.col-image -->

    </div>
    <!-- /.white-wrapper -->
@show


@section('news')
    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>Timeline Blog</h3>
                <p class="lead">display your journal entries in a timeline fashion</p>
            </div>
            <div class="timeline">
                <div class="date-title"> <span>March 2015</span> </div>
                <div class="row">
                    <div class="col-sm-6 timeline-item">
                        <div class="arrow"></div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-5">
                                    <figure><a href="#">
                                            <div class="text-overlay">
                                                <div class="info"><span>Read More</span></div>
                                            </div>
                                            <img src="style/images/art/tb1.jpg" alt="" /></a></figure>
                                </div>
                                <!-- /column -->
                                <div class="col-sm-9 col-md-7">
                                    <h4 class="post-title"><a href="#">Curabitur Blandit Tempus</a></h4>
                                    <div class="meta"><span class="date"><a href="#" class="link-effect">30 March 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                    <a href="#" class="more link-effect">Read More »</a> </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 timeline-item right">
                        <div class="arrow"></div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-5">
                                    <figure><a href="#">
                                            <div class="text-overlay">
                                                <div class="info"><span>Read More</span></div>
                                            </div>
                                            <img src="style/images/art/tb2.jpg" alt="" /></a></figure>
                                </div>
                                <!-- /column -->
                                <div class="col-sm-9 col-md-7">
                                    <h4 class="post-title"><a href="#">Mollis Euismod Fringilla</a></h4>
                                    <div class="meta"><span class="date"><a href="#" class="link-effect">22 March 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                    <a href="#" class="more link-effect">Read More »</a> </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="date-title"> <span>February 2015</span> </div>
                <div class="row">
                    <div class="col-sm-6 timeline-item">
                        <div class="arrow"></div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-5">
                                    <figure><a href="#">
                                            <div class="text-overlay">
                                                <div class="info"><span>Read More</span></div>
                                            </div>
                                            <img src="style/images/art/tb5.jpg" alt="" /></a></figure>
                                </div>
                                <!-- /column -->
                                <div class="col-sm-9 col-md-7">
                                    <h4 class="post-title"><a href="#">Dapibus Quam Ligula</a></h4>
                                    <div class="meta"><span class="date"><a href="#" class="link-effect">11 Februay 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                    <a href="#" class="more link-effect">Read More »</a> </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 timeline-item right">
                        <div class="arrow"></div>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-3 col-md-5">
                                    <figure><a href="#">
                                            <div class="text-overlay">
                                                <div class="info"><span>Read More</span></div>
                                            </div>
                                            <img src="style/images/art/tb6.jpg" alt="" /></a></figure>
                                </div>
                                <!-- /column -->
                                <div class="col-sm-9 col-md-7">
                                    <h4 class="post-title"><a href="#">Fusce Malesuada Cursus</a></h4>
                                    <div class="meta"><span class="date"><a href="#" class="link-effect">3 February 2015</a></span><span class="category"><a href="#" class="link-effect">Journal</a></span><span class="comments"><a href="#" class="link-effect"><i class="icon-chat-1"></i> 8</a></span></div>
                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</p>
                                    <a href="#" class="more link-effect">Read More »</a> </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.post-content -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.timeline -->
        </div>
        <!-- /.container -->

    </div>

@show

@section('photo')
    <div class="inverse-wrapper inner bp0">
        <div class="container">
            <div class="thin text-center">
                <div class="headline text-center">
                    <h2>Rich layouts & unlimited combinations</h2>
                    <p class="lead">Create a unique website easily with the help of tons of features</p>
                </div>
                <!-- /.headline -->
                <div class="divide30"></div>
                <figure>
                    <img src="style/images/art/hygge.png" alt="" />
                </figure>
            </div>
            <!-- /.thin -->

        </div>
        <!-- /.container -->
    </div>

@show

@section('pos')
    <div class="light-wrapper">
        <div class="container inner">
            <div class="headline text-center">
                <h2>Hello! Welcome to Hygge</h2>
                <p class="lead animated-text letters type"> <span>a multipurpose HTML5 template which is suitable for</span> <span class="animated-text-wrapper waiting"> <b class="is-visible">creative agencies</b> <b>personal blogs</b> <b>digital studios</b> <b>or any business owners</b> </span> </p>
            </div>
            <div class="divide30"></div>
            <div class="row services">
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="style/images/icons/lulu-web-browser.png" alt="" /> </div>
                        <h4>Responsive Layout</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>

                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="style/images/icons/lulu-paint-palette.png" alt="" /> </div>
                        <h4>Color Palette</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="style/images/icons/lulu-coding.png" alt="" /> </div>
                        <h4>Clear Coding</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
            <div class="divide30"></div>
            <div class="row services">
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="style/images/icons/lulu-chats.png" alt="" /> </div>
                        <h4>Personal Support</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="style/images/icons/lulu-tv.png" alt="" /> </div>
                        <h4>Video Support</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
                <div class="col-sm-4">
                    <div class="service text-center">
                        <div class="icon"> <img src="style/images/icons/lulu-clipboard.png" alt="" /> </div>
                        <h4>Extensive Documentation</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <!--/.service -->
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>


@show

@section('process')

    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>Process Model</h3>
                <p class="lead">our process on creating awesome projects</p>
            </div>
            <div class="thin3">
                <div class="row circle-wrapper">
                    <div class="col-sm-6 col-md-3">
                        <div class="circle blue-bg">
                            <div class="text">1. Envisioning</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle red-bg">
                            <div class="text">2. Planning</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle green-bg">
                            <div class="text">3. Development</div>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="circle yellow-bg">
                            <div class="text">4. Stabilization</div>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!--/.row -->
                <div class="divide30"></div>
                <p class="text-center">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div>
            <!--/.thin -->
        </div>
        <!--/.container -->
    </div>
    <!-- /.light-wrapper -->

@show

