 <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link  {{Request::is('admin/dashboard')? 'active':''}}" href="{{ url('admin/dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Pages</div>

                            <a class="nav-link {{Request::is('admin/category')  || Request::is('admin/add-category') ||Request::is('admin/edit-category/*') ? 'collapsed active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{Request::is('admin/category')  || Request::is('admin/add-category') ||Request::is('admin/edit-category/*') ? 'show':''}} " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link  {{Request::is('admin/add-category')? 'active':''}}" href="{{ url('admin/add-category')}}">Add Category</a>
                                    <a class="nav-link  {{Request::is('admin/category')||Request::is('admin/edit-category/*')? 'active':''}}" href="{{ url('admin/category')}}">View Category </a>
                                </nav>
                            </div>


                            <a class="nav-link {{Request::is('admin/quiz')  || Request::is('admin/add-quiz') ||Request::is('admin/edit-quiz/*') ? 'collapsed active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                quiz
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{Request::is('admin/quiz')  || Request::is('admin/add-quiz') ||Request::is('admin/edit-quiz/*') ? 'show':''}} " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link  {{Request::is('admin/add-quiz')? 'active':''}}" href="{{ url('admin/add-quiz')}}">Add quiz</a>
                                    <a class="nav-link  {{Request::is('admin/quiz')||Request::is('admin/quiz/*')? 'active':''}}" href="{{ url('admin/quiz')}}">View Quiz </a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/add-post')}}">Add Post</a>
                                    <a class="nav-link" href="{{ url('admin/posts')}}">View Post </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLevel" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Levels
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLevel" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/add-level')}}">Add Level</a>
                                    <a class="nav-link" href="{{ url('admin/level')}}">View Level </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePrice" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Price
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePrice" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/add-price')}}">Add Price</a>
                                    <a class="nav-link" href="{{ url('admin/price')}}">View Price </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategoryCourse" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                CategoryCourse
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCategoryCourse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/add-cate')}}">Add Cate</a>
                                    <a class="nav-link" href="{{ url('admin/cate')}}">View Cate </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContact" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                FooterContacts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseContact" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/add-contacts')}}">Add Contacts</a>
                                    <a class="nav-link" href="{{ url('admin/contacts')}}">View Contacts </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEvent" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Events
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseEvent" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/events/create')}}">Add Event</a>
                                    <a class="nav-link" href="{{ url('admin/events')}}">View Events </a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCourze" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Corzes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCourze" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/courzes/create')}}">Add Courze</a>
                                    <a class="nav-link" href="{{ url('admin/courzes')}}">View Courzes </a>
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAbout" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                About Us
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseAbout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/abouts/create')}}">Add about</a>
                                    <a class="nav-link" href="{{ url('admin/abouts')}}">View about </a>
                                </nav>
                            </div>


                            <a class="nav-link {{Request::is('admin/subscribers')? 'active':''}}" href="{{ url('admin/subscribers')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Subscribers
                            </a>

                            <a class="nav-link {{Request::is('admin/supporters')? 'active':''}}" href="{{ url('admin/supporters')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Supporters
                            </a>

                            <a class="nav-link {{Request::is('admin/users')? 'active':''}}" href="{{ url('admin/users')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                            </a>

                            <a class="nav-link {{Request::is('admin/enquiries')? 'active':''}}" href="{{ url('admin/enquiries')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Enquiries
                            </a>

                            <!-- applications -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseApp" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Applications
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseApp" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('foundation.get')}}">Foundation</a>
                                    <a class="nav-link" href="{{ route('individual.get')}}">Individual/Private </a>
                                    <a class="nav-link" href="{{ route('pa.get')}}">Pa hire </a>
                                    <a class="nav-link" href="{{ route('studio.get')}}">Studio hire </a>
                                </nav>
                            </div>

                        </div>
                    </div>

                </nav>
            </div>
