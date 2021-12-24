<div class="row flex-grow">

<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit a New Project</h4>
                  <p class="card-description">
                    Project Details
                  </p>
                  <form action= "{{ url('/update/'.$project->id) }}" method="post" class="forms-sample">

                  @csrf  


                  <div class="form-group">
                      <label >Project Name</label>
                      <input value="{{ $project->project_name }}" type="text" name="project_name" class="form-control" id="project_name" placeholder="">
                    </div>


                    <div class="form-group">
                      <label >Cost</label>
                      <input value="{{ $project->project_cost }}" type="text" name="cost" class="form-control" id="cost" placeholder="">
                    </div>


                    <div class="form-group">
                      <label > Duration </label>
                      <input value="{{ $project->duration }}" type="number" name="duration" class="form-control" id="duration" min="1" max="2500">
                    </div>


                    <div class="form-group">
                      <label >Started Date</label>
                      <input value="{{ $project->start_date }}" type="date" class="form-control" id="start_date" name="start_date">
                    </div>

                    <div class="form-group">
                      <label >End Date</label>
                      <input value="{{ $project->end_date }}" type="date" class="form-control" id="end_date" name="end_date">
                    </div>


                    <div class="form-group">
                      <select value="{{ $project->project_status }}" name="project_status">
                        <option value="None"> Project Status </option>
                        <option value="On Track"> On Track </option>
                        <option value="Delayed"> Delayed </option>
                        <option value="Extended"> Extended </option>
                        <option value="Completed"> Completed </option>

                      </select>

                    </div>


                    <div class="form-group">
                    
                      <select value="{{ $project->project_stage }}" name="project_stage">
                        <option value="None"><label >  Project Stage </label> </option>
                        <option value="Inception"> Inception </option>
                        <option value="Milestone 1"> Milestone 1 </option>
                        <option value="Milestone 2">Milestone 2</option>
                        <option value="Final Project"> Final Project </option>
                        <option value="Closing"> Closing </option>

                      </select>

                    </div>



                    <button type="submit" class="btn btn-primary me-2" value="Update">Update</button>
                    <button class="btn btn-light" value="Reset">Cancel</button>

                  </form>
                </div>
              </div>
            </div>
</div>