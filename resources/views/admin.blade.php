<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kimaya Admin</title>
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Admin !</span>
              <img class="img-xs rounded-circle" src="images/auth/pic.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="{{ url('logout') }}">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/auth/pic.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Orders</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Mobile Number
                          </th>
                          <th>
                            Subject
                          </th>
                          <th>
                            Message
                          </th>
                          <th>
                            Date and Time
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contact as $contacts)
                        <tr>
                          <td class="font-weight-medium">
                            {{$contacts->contacts_id}}
                          </td>
                          <td>
                            {{$contacts->contacts_name}}
                          </td>
                          <td>
                            {{$contacts->contacts_number}}
                          </td>
                          <td>
                            {{$contacts->contacts_subject}}
                          </td>
                          <td style="word-wrap: break-word;">
                            {{$contacts->contacts_message}}
                          </td>
                          <td>
                            {{$contacts->created_at}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                      <ul class="pagination pg-blue">
                          @for ($i = 1; $i <= $contact->lastPage(); $i++)
                              <li class="page-item">
                                  <a href="{{ $contact->url($i) }}">{{ $i }}</a>
                              </li>
                          @endfor
                      </ul>
                    </nav>
                 <!-- @if ($contact->lastPage() > 1)
                    <nav aria-label="Page navigation example">
                      <ul class="pagination pg-blue">
                          <li class="{{ ($contact->currentPage() == 1) ? ' disabled' : '' }} page-item">
                              <a href="{{ $contact->url(1) }}">Previous</a>
                          </li>
                          @for ($i = 1; $i <= $contact->lastPage(); $i++)
                              <li class="page-item">
                                  <a href="{{ $contact->url($i) }}">{{ $i }}</a>
                              </li>
                          @endfor
                          <li class="{{ ($contact->currentPage() == $contact->lastPage()) ? ' disabled' : '' }} page-item">
                              <a href="{{ $contact->url($contact->currentPage()+1) }}" >Next</a>
                          </li>
                      </ul>
                    </nav>
                    @endif -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script src="vendors/js/vendor.bundle.base.js"></script>
</body>

</html>