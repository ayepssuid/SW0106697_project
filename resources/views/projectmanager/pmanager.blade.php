<!DOCTYPE html>


<html lang="en">

<head>
    @include("projectmanager.managercss")

</head>
<body>

          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    
    @include("projectmanager.projectheader")

    @include("projectmanager.projectnavbar")

    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                     
                    
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded table-darkBGImg">
                              <div class="card-body">
                                <div class="col-sm-8">
                                  <h3 class="text-white upgrade-info mb-0">
                                    Enhance your <span class="fw-bold">Campaign</span> for better outreach
                                  </h3>
                                  <a href="#" class="btn btn-info upgrade-btn">Upgrade Account!</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Project Members</h4>
                                   <p class="card-subtitle card-subtitle-dash">Name of users that used the system</p>
                                  </div>
                                  <div>
                                  <a href="{{url('/create')}}"> <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button" ><i class="mdi mdi-account-plus"></i>Add new member</button>
</a>
                                  </div>
                               </div>

                               


                        @if($layout == 'redirectFunct')

                        <section>
                        @include("projectmanager.projectlist")
                        </section>
 

                        @elseif($layout == 'create')

                        <section>
                        @include("projectmanager.projectlist")
                        </section>

                        <section>

                        @include("projectmanager.createnewproject")

                         </section>

                         @elseif($layout == 'show')

                         <section>
                        @include("projectmanager.projectlist")
                        </section>

                         

                         @endif

                         







                    

                        
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            <div class="card card-rounded">
                              
                            </div>
                          </div>

                          <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                            
                          </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                        
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                        
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
         
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

      </div>

  
    
  
  

  @include("projectmanager.projectscript")

  
</body>

</html>
