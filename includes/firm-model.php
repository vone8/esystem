<div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Add this line to your code -->
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Firm Details</h5>
                    </div>
                    <div class="modal-body">
                    <div class="card mb-0">
                        <div class="card-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="basicInput">Name/Firm</label>
                                            <input type="text" class="form-control" id="basicInput" placeholder="Enter Name" name="firm-name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Birth/Est. Date</label>
                                            <input type="date" class="form-control" id="basicInput" placeholder="Enter Birt/Est. Date" name="firm-date" required>
                                        </div>        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="basicInput">PAN Number</label>
                                            <input type="text" class="form-control" id="basicInput" placeholder="Enter PAN Number" name="firm-pan" required maxlength="10" minlength="10" title="PAN Number must be 10 character">
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">GST Number</label>
                                            <input type="text" class="form-control" id="basicInput" placeholder="Enter GST Number" name="firm-gst" maxlength="15" minlength="15" required title="GST Number must be 15 character">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="basicInput">Firm Email</label>
                                            <input type="email" class="form-control" id="basicInput" placeholder="Enter Firm Email" name="firm-email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Firm Contact</label>
                                            <input type="text" class="form-control" id="basicInput" placeholder="Enter Firm Contact" name="firm-contact" required maxlength="10">
                                        </div> 
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label for="basicInput">Firm Type</label>                                            
                                            <select class="form-select" id="basicSelect" name="firm-type" required="">
                                                <option>IT</option>
                                                <option>Blade Runner</option>
                                                <option>Thor Ragnarok</option>
                                            </select>          
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Gender</label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                    Female
                                                    </label>
                                                </div>
                                            </div>  
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="basicInput">Address</label>
                                                <textarea class="form-control" id="address" rows="3" name="firm-address" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary rounded-pill" name="firm-register">Submit</button>
                                        </div>
                                    </div>
                                    </div>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- And the relavant closing div tag -->