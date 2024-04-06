          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.users.index')}}">Users List</a></li>
                            <li><a href="{{route('admin.users.create')}}">Add User</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Article <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.articles.index')}}">Article List</a></li>
                            <li><a href="{{route('admin.articles.create')}}">Add Articles</a></li>
                        </ul>
                    </li>


                    <li><a><i class="fa fa-desktop"></i> Site Settings <span class="fa fa-chevron-down"></span></a>
                         <ul class="nav child_menu">
                             <li><a href="{{route('admin.abouts.index')}}">About US</a></li>
                            <li><a href="{{route('admin.contact.index')}}">Contact US</a></li>
                            <li><a href="{{route('admin.media.index')}}">Media</a></li>
                            <li><a href="{{route('admin.privacyBpolicy.index')}}">Privacy Policy</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-desktop"></i> Messages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.messages.index')}}">Messages</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
