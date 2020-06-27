<?php 
  $this->view('includes/head.php');
?>
  <body>
      <table >
          <tr >
          <img src="<?php echo base_url('assets/images/logo.png')?>" class="img-fluid" alt="Responsive image" style="margin-left: 36%;">
         </tr>
         <tr>
             <h2 style="text-align: center;">VOLUNTEER FORM</h2>
         </tr>
      </table>
    
      <form>
    
              <div class="container">
              <div class="row">
                    <div class="col-md-9 border">
                        <div class="row">
                            <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="app">Application No.:</label></h6></div>
                            <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="app" name="app" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="app">Date:</label></h6></div>
                            <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="date" name="date" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 border f1"><h5>Personal Details</h5></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="app">Name:</label></h6></div>
                            <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="name" name="name" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="app">Father's/Husband's Nmae:</label></h6></div>
                            <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="date" name="date" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="app">Date</label></h6></div>
                            <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="fname" name="fname" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="app">Email</label></h6></div>
                            <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="email" name="email" class="f2"></div>
                        </div>
                    </div>
                    <div class="col-md-3 border"><input type="image" id="img" name="img" class="f2"><p style="padding-top: 40px;">Recent Pasport </br> Size Photograph of</br> the Applicant</br> <button class="btn btn-primary" type="submit">Upload Photo</button></p></div>
                  </div>
                <div class="row">
                    <div class="col-md-3 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="dob">Date of Birth:</label></h6></div>
                    <div class="col-md-4 border"  style="padding-top: 10px;"><input type="text" id="dob" name="dob" class="f2"></div>
                    <div class="col-md-2 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="gen">Gender</label></h6></div>
                    <div class="col-md-3 border"  style="padding-top: 10px;"><input type="text" id="dob" name="gen" class="f2"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="pob">Place of Birth:</label></h6></div>
                    <div class="col-md-4 border"  style="padding-top: 10px;"><input type="text" id="dob" name="pob" class="f2"></div>
                    <div class="col-md-2 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="nation">Nationality:</label></h6></div>
                    <div class="col-md-3 border"  style="padding-top: 10px;"><input type="text" id="dob" name="nation" class="f2"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="ip">ID Proof:</label></h6></div>
                    <div class="col-md-4 border"  style="padding-top: 10px;"><input type="text" id="ip" name="ip" class="f2"></div>
                    <div class="col-md-2 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="ap">Adress Proof</label></h6></div>
                    <div class="col-md-3 border"  style="padding-top: 10px;"><input type="text" id="ap" name="ap" class="f2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2 border"><h6 style="float: left;" >Residential Adress</h6></div>
                    <div class="col-md-5 border">
                        <div class="row">
                            <div class="col-md-6 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Line 1:</label></h6></div>
                            <div class="col-md-6 border"  style="padding-top: 10px;"><input type="text" id="l1" name="l1" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l2">Line 2:</label></h6></div>
                            <div class="col-md-6 border"  style="padding-top: 10px;"><input type="text" id="l2" name="l2" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l3">Line 3:</label></h6></div>
                            <div class="col-md-6 border"  style="padding-top: 10px;"><input type="text" id="l3" name="l3" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="phone">Phone No:</label></h6></div>
                            <div class="col-md-6 border"  style="padding-top: 10px;"><input type="text" id="phone" name="phone" class="f2"></div>
                        </div>
                    </div>
                    
                        <div class="col-md-5 border">
                            <div class="row">
                                <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="c1">City:</label></h6></div>
                                <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="c1" name="c1" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">State:</label></h6></div>
                                <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="s1" name="s1" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Pincode:</label></h6></div>
                                <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="p1" name="p1" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Mobile:</label></h6></div>
                                <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="m1" name="m1" class="f2"></div>
                            </div>
                        </div>
                     </div>
                     
                <div class="row">
                    <div class="col-md-2 border"><h6 style="float: left;" >Permanent Adress:</h6></div>
                    <div class="col-md-5 border">
                        <div class="row">
                            <div class="col-md-6 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Line 1:</label></h6></div>
                            <div class="col-md-6 border"  style="padding-top: 10px;"><input type="text" id="l1" name="l1" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l2">Line 2:</label></h6></div>
                            <div class="col-md-6 border"  style="padding-top: 10px;"><input type="text" id="l2" name="l2" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l3">Line 3:</label></h6></div>
                            <div class="col-md-6 border"  style="padding-top: 10px;"><input type="text" id="l3" name="l3" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="phone">Phone No:</label></h6></div>
                            <div class="col-md-6 border"  style="padding-top: 10px;"><input type="text" id="phone" name="phone" class="f2"></div>
                        </div>
                    </div>
                    
                        <div class="col-md-5 border">
                            <div class="row">
                                <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="c1">City:</label></h6></div>
                                <div class="col-md-8 border"  style="padding-top: 10px;"><input type="text" id="c1" name="c1" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 border"  style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">State:</label></h6></div>
                                <div class="col-md-8 border" style="padding-top: 10px;"><input type="text" id="s1" name="s1" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Pincode:</label></h6></div>
                                <div class="col-md-8 border" style="padding-top: 10px;"><input type="text" id="p1" name="p1" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Mobile(Father):</label></h6></div>
                                <div class="col-md-8 border" style="padding-top: 10px;"><input type="text" id="m1" name="m1" class="f2"></div>
                            </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 border f1"><h5>Professional Details</h5></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="eq">Educational Qualification:</label></h6></div>
                        <div class="col-md-9 border" style="padding-top: 10px;"><input type="text" id="eq" name="eq" class="f2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="oc">Occupation:</label></h6></div>
                        <div class="col-md-9 border" style="padding-top: 10px;"><input type="text" id="oc" name="oc" class="f2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="og">Organisation:</label></h6></div>
                        <div class="col-md-9 border" style="padding-top: 10px;"><input type="text" id="og" name="og" class="f2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="dg">Designation:</label></h6></div>
                        <div class="col-md-9 border" style="padding-top: 10px;"><input type="text" id="dg" name="dg" class="f2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 border"><h6 style="float: left;" >Office Adress</h6></div>
                        <div class="col-md-5 border">
                            <div class="row">
                                <div class="col-md-6 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Line 1:</label></h6></div>
                                <div class="col-md-6 border" style="padding-top: 10px;"><input type="text" id="l1" name="l1" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="l2">Line 2:</label></h6></div>
                                <div class="col-md-6 border" style="padding-top: 10px;"><input type="text" id="l2" name="l2" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="l3">Line 3:</label></h6></div>
                                <div class="col-md-6 border" style="padding-top: 10px;"><input type="text" id="l3" name="l3" class="f2"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="phone">Phone No:</label></h6></div>
                                <div class="col-md-6 border" style="padding-top: 10px;"><input type="text" id="phone" name="phone" class="f2"></div>
                            </div>
                        </div>
                        
                            <div class="col-md-5 border">
                                <div class="row">
                                    <div class="col-md-4 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="c1">City:</label></h6></div>
                                    <div class="col-md-8 border" style="padding-top: 10px;"><input type="text" id="c1" name="c1" class="f2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">State:</label></h6></div>
                                    <div class="col-md-8 border" style="padding-top: 10px;"><input type="text" id="s1" name="s1" class="f2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Pincode:</label></h6></div>
                                    <div class="col-md-8 border" style="padding-top: 10px;"><input type="text" id="p1" name="p1" class="f2"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 border" style="padding-top: 10px;"><h6 style="float: left;" ><label for="l1">Mobile:</label></h6></div>
                                    <div class="col-md-8 border" style="padding-top: 10px;"><input type="text" id="m1" name="m1" class="f2"></div>
                                </div>
                            </div>
                         </div>
                         
                         <div class="form-group border">
                            <h6 style="text-align: left;"><label for="exampleFormControlTextarea1">How do you come to know about AVRN foundation?</label></h6>
                            <textarea class="form-control f2" id="exampleFormControlTextarea1" rows="3" ></textarea>
                          </div>
                          <div class="form-group border">
                            <h6 style="text-align: left;"><label for="exampleFormControlTextarea1">Why do you want to join AVRN foundation?</label></h6>
                            <textarea class="form-control f2" id="exampleFormControlTextarea1" rows="3" ></textarea>
                          </div>
                          <div class="form-group border">
                            <h6 style="text-align: left;"><label for="exampleFormControlTextarea1">Brief Profile (about yourself,occupation,hobbies, etc) in few lines.</label></h6>
                            <textarea class="form-control f2" id="exampleFormControlTextarea1" rows="3" ></textarea>
                          </div>
                          <div class="form-group border">
                            <h6 style="text-align: left;"><label for="exampleFormControlTextarea1">Why do you want to volunteer?</label></h6>
                            <textarea class="form-control f2" id="exampleFormControlTextarea1" rows="3" ></textarea>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-12 border f1"><h5>Declaration</h5></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 "><h6 style="text-align: left;">I hereby declare that I have read the By-laws of the 2AVRN Foundation and agree to become the general member of the AVRN Foundation. I shall fulfill necessary obligations as a general member of the AVRN Foundation.

                                								
                                
                            </h6></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" style="padding-top: 10px;"><h6 style="text-align: left;"><label for="pic">Applicant's signature:</label></h6></div>
                            <div class="col-md-4 border" style="padding-top: 10px;"><input type="image" id="pic" name="pic" class="f2"></div>
                            <div class="col-md-1"></div>
                            <div class="col-md-1" style="padding-top: 10px;"><h6 style="text-align: left;"><label for="d1">DATE:</label></h6></div>
                            <div class="col-md-3 border" style="padding-top: 10px;"><input type="text" id="d1" name="d1" class="f2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" style="padding-top: 10px;"><h6 style="text-align: left;"><label for="d1">PLACE:</label></h6></div>
                            <div class="col-md-4 border"><input type="text" id="d1" name="d1" class="f2"></div>
                        </div>
          </div>
          <button type="button" class="btn btn-primary btn-lg" style="margin-left: 45%;">Submit Form</button>
      </form>
      <?php 
  $this->view('includes/footer.php');
?>