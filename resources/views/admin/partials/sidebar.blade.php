<a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
          </g>
        </svg>
      </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">


      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
           
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                  <i class="fe fe-box fe-16"></i>
                  <span class="ml-3 item-text">الايتام</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                  <li class="nav-item">
                      <a class="nav-link pl-3" href="{{ route('orphan.create') }}"><span class="ml-1 item-text">تسجيل
                              يتيم</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link pl-3" href="{{ route('orphan.index') }}"><span class="ml-1 item-text"> عرض الكل
                          </span></a>
                  </li>
              </ul>
          </li>
            <li class="nav-item dropdown">
              <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-pie-chart fe-16"></i>
                <span class="ml-3 item-text">المشاريع و البرامج</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{route('program.create')}}"><span class="ml-1 item-text">إنشاء مشروع</span></a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{route('program.index')}}"><span class="ml-1 item-text"> عرض كافة المشاريع</span></a>
                </li>
               
               
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#st" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-pie-chart fe-16"></i>
                <span class="ml-3 item-text">متبرعين</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="st">
                
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{route('Donors.create')}}"><span class="ml-1 item-text">تسجيل متبرع</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="{{route('Donors.index')}}"><span class="ml-1 item-text"> عرض كافة المتبرعين</span></a>
                </li>
                
               
              </ul>
            </li>
           
               
              </ul>
      </li></ul>
     
   



  </nav>
