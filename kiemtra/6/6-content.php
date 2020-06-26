<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-6 mt-4 mb-4">
      <div class="container">
            <div class="d-flex justify-content-center position-relative title">
                  <div class="text-1 mt-2">
                        <h5 class="text-uppercase mb-0 font-weight-bold mt-1">From the blog</h5>
                        <span class="text-uppercase d-block mb-0 text-center font-weight-bold">our blog</span>
                  </div>
                  <div class="position-absolute">
                        <h1 class="text-uppercase text-2 font-weight-bold">latest new</h1>
                  </div>
            </div>
            <div class="row mt-4">
                  <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-3">
                        <div class="card">
                              <img src="images/6-img1.png" class="card-img-top" alt="Hình 1 module 6">
                              <div class="card-body p-0">
                                    <div class="row m-0 d-flex justify-content-center align-items-center title-top">
                                          <div class="col-3 date d-flex justify-content-center p-0">
                                                <div class="p-3">
                                                      <h4 class="font-weight-bold mb-0">20</h4>
                                                      <span class="text-uppercase font-weight-bold">may</span>
                                                </div>
                                          </div>
                                          <div class="col-9 p-3">
                                                <h6 class="card-title font-weight-bold mb-0"> Phasellus metus odio,
                                                      consequat sed sem vitae.</h6>

                                          </div>
                                    </div>

                                    <div class="p-3 ">
                                          <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Aenean et rhoncus neque. Vestibulum facilisis lacus
                                                eget elit
                                                tincidunt, nec feugiat nisl molestie.</p>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-3">
                        <div class="card">
                              <div class="card-body p-0">
                                    <div class="row m-0 d-flex justify-content-center align-items-center title-top">
                                          <div class="col-3 date d-flex justify-content-center p-0">
                                                <div class="p-3">
                                                      <h4 class="font-weight-bold mb-0">20</h4>
                                                      <span class="text-uppercase font-weight-bold">may</span>
                                                </div>
                                          </div>
                                          <div class="col-9 p-3">
                                                <h6 class="card-title font-weight-bold mb-0"> Phasellus metus odio,
                                                      consequat sed sem vitae.</h6>

                                          </div>
                                    </div>

                                    <div class="p-3 ">
                                          <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Aenean et rhoncus neque. Vestibulum facilisis lacus
                                                eget elit
                                                tincidunt, nec feugiat nisl molestie.</p>
                                    </div>
                              </div>
                              <img src="images/6-img2.png" class="card-img-top" alt="Hình 2">

                        </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-3">
                        <div class="card">
                              <img src="images/6-img3.png" class="card-img-top" alt="Hình 3">
                              <div class="card-body p-0">
                                    <div class="row m-0 d-flex justify-content-center align-items-center title-top">
                                          <div class="col-3 date d-flex justify-content-center p-0">
                                                <div class="p-3">
                                                      <h4 class="font-weight-bold mb-0">20</h4>
                                                      <span class="text-uppercase font-weight-bold">may</span>
                                                </div>
                                          </div>
                                          <div class="col-9 p-3">
                                                <h6 class="card-title font-weight-bold mb-0"> Phasellus metus odio,
                                                      consequat sed sem vitae.</h6>

                                          </div>
                                    </div>

                                    <div class="p-3 ">
                                          <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Aenean et rhoncus neque. Vestibulum facilisis lacus
                                                eget elit
                                                tincidunt, nec feugiat nisl molestie.</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>