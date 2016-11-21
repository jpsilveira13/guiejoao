@extends('layouts.app')
@section('title') Brotsortiment :: @parent @endsection
@section('content')
<!--==============page header============-->
    <div class="page-breadcrumb-brotsortiment" data-stellar-background-ratio="0.5">
        <div class="container text-center">
            <h1>Brotsortiment</h1>
        </div>
    </div>
    <!--==============end page header============-->


    <div class="space-80"></div>

    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <div class="sidebar-widget">

                    <ul class="list-unstyled cat-list">
                        <li><a onclick="carregar('apulischer.html')" href="#">Apulischer Art</a></li>
                        <li><a href="#">Sizilianischer Art</a></li>
                        <li><a href="#">Kalabrischer Art</a></li>
                        <li><a href="#">Altamura Art</a></li>
                        <li><a href="#">Tiroler Art</a></li>
                        <li><a href="#">Frese Frise Freselle</a></li>
                        <li><a href="#">Focaccia, Kräuter & Oliven</a></li>
                    </ul>
                </div><!--sidebar widget end-->
                <div class="sidebar-widget">

                </div><!--sidebar widget end-->

            </div>
            <div class="col-sm-9" id="conteudo">
              <ul class="menu-filter-list list-inline margin-b-40 text-center">
                  <li class="is-checked" data-filter="*">All</li>
                  <li data-filter=".start">start</li>
                  <li data-filter=".breakfast">Breakfast</li>
                  <li data-filter=".lunch">Lunch</li>
                  <li data-filter=".dinner">Dinner</li>
              </ul>

              <div class="row menu-filter-items">
                  <div class=" start breakfast col-sm-4 margin-b-30 menu-item">

                      <div class="menu-box clearfix ">
                          <div class="thumb">
                              <img src="assets/images/img-5.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" start col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-4.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" start col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-3.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" start breakfast col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-8.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" lunch col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-2.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" lunch col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-1.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" dinner breakfast col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/a2.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" start dinner breakfast col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-8.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" start breakfast col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-9.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" dinner col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/a2.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" lunch breakfast col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-7.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" breakfast col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-6.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" start dinner col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-5.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" start col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-3.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" start dinner col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-2.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" lunch col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-6.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" lunch dinner col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/img-1.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
                  <div class=" lunch col-sm-4 margin-b-30 menu-item">
                      <div class="menu-box clearfix ">
                           <div class="thumb">
                              <img src="assets/images/a3.jpg" width="70" alt="">
                          </div>
                          <div class="menu-content">
                              <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                              <p>pellentesque enim. Aliquam tempor</p>
                          </div>
                      </div>
                  </div><!--end col-->
              </div>


            </div>
        </div>
    </div>

@endsection
