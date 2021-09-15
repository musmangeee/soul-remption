@include('modals.request-code-success')
<div id="Requestcode" class="modal fade text-center " data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="col-lg-8 col-sm-8 col-12 main-section">
            <div class="modal-content">
             
                <div class="col-lg-12 col-sm-12 col-12 user-name">
                    <h1 class="mb-1">Welcome to Soul redemption's Virtual Screening!</h1>
                    <p class="mb-1">To gain access to view film</p>
                    <h5 class="mb-1">1:Please submit your email address</h5>
                    <h5 class="mb-1">2:In the email state the reasons for requesting access to the film</h5>
                </div>
                
                <div class="col-lg-12 col-sm-12 col-12 form-input">
                    <div class="alert alert-danger mb-3" id="watch_video_alert" role="alert"  style="display: none">
                        Your Code is incorrect or expired!!
                      </div>
                    <form id="request-code"  method="POST" >
                        <div class="form-group">
                            <input type="email" name="code" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="reason" class="form-control" placeholder="State reason for request here..."></textarea>
                        </div>
                        <h5 class="mb-1">3:On approval, anaccess code will be send</h5>
                        <h5 class="mb-1">4:I hope you enjoy the film</h5>
                    <h5 class="mb-1">5:Get the code!</h5>
                        <button type="submit" class="btnmodal">Request Code</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
