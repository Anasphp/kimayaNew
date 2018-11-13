<div class="page-welcome-area">
  <div class="header-area header-absolute page-header-style">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-4 col-xs-6">
          <div class="logo">
            <a href="{{ url('/') }}"><img src="assets/img/kim.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-6 col-sm-8" style="width:865px;">
          <div class="mainmenu">
           <ul id="slicknav-menu-list">
             <li><a href="{{ url('/') }}">Home</a>
             </li>
             <li><a href="{{ url('/domestic') }}">Domestic</a>
               <ul>
                 <li><a href="{{ url('/tours-detail') }}">Andaman</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Karnataka</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Kerala</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Goa</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Andhra Pradesh</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Tamil Nadu</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Shimla & Manali</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Jammu & Kashmir</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Ladakh</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Sikkim & Darjeeling</a></li>
                 <li><a href="{{ url('/tours-detail') }}">Nepal</a></li>
               </ul>
             </li>
             <li><a href="{{ url('/international') }}">International</a>
              <ul>
               <li><a href="{{ url('/tours-detail') }}">America</a></li>
               <li><a href="{{ url('/tours-detail') }}">Australia</a></li>
               <li><a href="{{ url('/tours-detail') }}">Dubai</a></li>
               <li><a href="{{ url('/tours-detail') }}">China</a></li>
               <li><a href="{{ url('/tours-detail') }}">New Zealand</a></li>
               <li><a href="{{ url('/tours-detail') }}">Thailand</a></li>
               <li><a href="{{ url('/tours-detail') }}">Singapore</a></li>
               <li><a href="{{ url('/tours-detail') }}">Malaysia</a></li>
               <li><a href="{{ url('/tours-detail') }}">Maldives</a></li>
             </ul>
           </li>
           <li><a href="{{ url('/students-tour') }}">Students Tour</a></li>
           <li><a href="{{ url('/industrial-visit') }}">Industrial Visit</a></li>
           <li><a href="{{ url('/corporate') }}">Corporate Tour</a></li>
           <li><a href="{{ url('/contact') }}">Contact Us</a></li>
         </ul> 
       </div>
     </div>
     <div class="col-md-4 col-sm-8 col-xs-6">
      <div class="slicknav-menu-wrap"></div>
    </div>
  </div>
</div>
</div>

<div class="page-title-area black-overlay text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-title-inner">
          <div class="page-title-inner-table-cell">
            <h1>{{$title}}</h1>
            <div class="page-title-menu">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>