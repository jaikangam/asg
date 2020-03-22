<section class="section" id="roomplan">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="brand-color font-weight-600"> Hostel Room Plan </h2>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-center py-50">
      <div class="col-lg-12">
        <div class="row row-grid mb-50">
         
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="hosteroom card  shadow border-0">
              <div class="card-body py-5">
                <div class="mb-1">
                  <img src="{{asset('frontend/img/room/single.png')}}" alt="" class="img-fluid img-center">
                </div>
                <h5 class="brand-color text-center ">Single Room </h5>
                <ul class="list ">
                  <li class="cardList"> <i class="fa fa-check cardIcon"></i> Cras justo odio</li>
                  <li class="cardList"> <i class="fa fa-check cardIcon"></i> Dapibus ac facilisis in</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Morbi leo risus</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Porta ac consectetur ac</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Vestibulum at eros</li>
                </ul>
                
                <div class="text-center">
                  <a href="#" class="btn btn-brandcolor mt-4 ">Book Now</a>
                </div>
                
              </div>
            </div>
          </div><!-- Close col 4--> 
         
           <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="hosteroom card  shadow border-0">
              <div class="card-body py-5">
                <div class="mb-1">
                 <img src="{{asset('frontend/img/room/double.png')}}" alt="Double Room" class=" img-fluid img-center">
                </div>
                <h5 class="brand-color text-center ">Double Room </h5>
                <ul class="list ">
                  <li class="cardList"> <i class="fa fa-check cardIcon"></i> Cras justo odio</li>
                  <li class="cardList"> <i class="fa fa-check cardIcon"></i> Dapibus ac facilisis in</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Morbi leo risus</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Porta ac consectetur ac</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Vestibulum at eros</li>
                </ul>
                
                <div class="text-center">
                  <a href="#" class="btn btn-brandcolor mt-4 " data-toggle="modal" data-target="#modal-notification" >Book Now</a>
                  
                </div>
                
              </div>
            </div>
          </div><!-- Close col 4--> 
         
           <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="hosteroom card  shadow border-0">
              <div class="card-body py-5">
                <div class="mb-1">
                 <img src="" alt="" class=" img-fluid img-center">
                </div>
                <h5 class="brand-color text-center ">Premium Room </h5>
                <ul class="list ">
                  <li class="cardList"> <i class="fa fa-check cardIcon"></i> Cras justo odio</li>
                  <li class="cardList"> <i class="fa fa-check cardIcon"></i> Dapibus ac facilisis in</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Morbi leo risus</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Porta ac consectetur ac</li>
                  <li class="cardList"><i class="fa fa-check cardIcon"></i> Vestibulum at eros</li>
                </ul>
               
                <div class="text-center">
                  <a href="#" class="btn btn-brandcolor mt-4 ">Book Now</a>
                </div>
                
              </div>
            </div>
          </div>  <!-- Close col 4--> 

        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-md" role="document">
            <div class="modal-content bg-gradient-warning">
    
                <div class="modal-header">
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
    
                <div class="modal-body">
                
                <div class="text-center text-muted mb-4">
                  <h6 class="text-white"> Register for Visit</h6>
                </div>
                <form role="form">
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <input class="form-control" placeholder="Name" type="text" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" type="email" required>
                    </div>
                  </div>
                  <div class="form-group focused">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Contact No" type="text" required>
                    </div>
                  </div>
                 
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                        <label class="custom-control-label" for="customCheckRegister"><span>I agree with the <a href="#">Privacy Policy</a></span></label>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-white ">Book Now </button>
                  </div>
                </form>

                <div class="text-center ">
                  <h6 class="text-white"> Or </h6>
                </div>

                <div class="text-center  mb-4">
                  <a href="tel:7005838409" class="btn btn-white" > Call Us : 7005838409 </a>
                </div>
                
    
                </div>
  
    
            </div>
        </div>
  </div>
</section>
