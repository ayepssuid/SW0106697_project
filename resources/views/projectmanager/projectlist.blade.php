


                                <div class="table-responsive  mt-1">                             
                                  <table class="table select-table">   
                                    
                                    <thead>
                                      <tr>
                                        <th>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </th>
                                     
                                        <th>Project Name </th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Duration</th>
                                        <th>Cost</th>
                                        <th>Project Stage</th>
                                        <th>Project Status</th>
                                      




                                      </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($projects as $project)           
                                      <tr>
                                        <td>
                                          <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                          </div>
                                        </td>


                                       
  

                                        <td>
                                          <h6>{{$project->project_name}}</h6> 
                                        </td>

                                        <td>
                                          <h6>{{$project->start_date}}</h6>   
                                        </td>

                                        <td>
                                          <h6>{{$project->end_date}}</h6>   
                                        </td>

                                        <td>
                                          <h6>{{$project->duration}}</h6>   
                                        </td>

                                        <td>
                                          <h6>{{$project->cost}}</h6>   
                                        </td>

                                        <td>
                                          <h6>{{$project->project_status}}</h6>   
                                        </td>

                                        <td>
                                          <h6>{{$project->project_stage}}</h6>   
                                        </td>

                                   

                                        

                                        
                                      </tr>
                                     
                                     


                                    </tbody>
                                    @endforeach
                            </table>                            
                          </div>




                              </div>
                            </div>
                          </div>
                        </div>