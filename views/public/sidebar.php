<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="/assets/images/users/profile.png" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5><?php $user = json_decode(user_name()); echo $user->Name; ?></h5>
                        <a href="/functions/logout/" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a class="waves-effect waves-dark" href="/app/" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="nav-small-cap">USER MANAGEMENT</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Clients</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/app/clients/">All Clients</a></li>
                                <li><a href="/app/clients/add/">Add Client</a></li>
                            </ul>
                        </li> 
                        <li class="nav-small-cap">TRAVEL MANAGEMENT</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Visa</span></a>
                         <ul aria-expanded="false" class="collapse">
                                <li><a href="/app/visa/">All Visa</a></li>
                                <li><a href="/app/visa/add/">Add Visa</a></li>
                                <li><a href="/app/visa/addst/">Attestation</a></li>
                            </ul></li>
                            
                            
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Ticketing</span></a>
                         <ul aria-expanded="false" class="collapse">
                                <li><a href="/app/ticketing/">All Ticketing</a></li>
                                <li><a href="/app/ticketing/add/">Add Ticketing</a></li>
                            </ul></li>
                            
                               <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Tour-packages</span></a>
                         <ul aria-expanded="false" class="collapse">
                                <li><a href="/app/tour-packages/">All packages</a></li>
                                <li><a href="/app/tour-packages/add/">Add packages</a></li>
                            </ul></li>
                            
                            
                            
                        <li class="nav-small-cap">SETTINGS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Admins</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/app/admins/">All Admins</a></li>
                                <li><a href="/app/admins/add/">Add Admins</a></li>
                            </ul>
                        </li>
					</ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>