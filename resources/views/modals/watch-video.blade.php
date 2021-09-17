


<div id="watchvideo" class="modal fade text-center " data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="col-lg-8 col-sm-8 col-12 main-section">
            <div class="modal-content">
                <div class="col-lg-12 col-sm-12 col-12 user-img">
                    <img src="{{ asset('img/video-player.png') }}">
                </div>
                <div class="col-lg-12 col-sm-12 col-12 user-name">
                    <h1 class="mb-1">Welcome!</h1>
                    <p class="mb-1">Enter Code to Watch Soul Redemption</p>
                </div>
                <div class="col-lg-12 col-sm-12 col-12 form-input">
                    <div class="alert alert-danger mb-3" id="watch_video_alert" role="alert"  style="display: none">
                        Your Code is incorrect or expired!!
                      </div>
                    <form id="send-code"  method="POST" >
                        <div class="form-group">
                            <input type="text" name="code" class="form-control" placeholder="Enter code">
                        </div>
                        <button type="submit" class="btnmodal">Verify</button>
                    </form>
                    <p>OR</p>
                        <button id="requestcode" type="button" class="btn btn-info request" data-toggle="modal" data-target="#Requestcode">
                        Request A Code
                      </button>
                </div>
                <div class="col-lg-12 col-sm-12 col-12 link-part">
                    <p class="text-size">To watch film, please request code from Ricahrd Burns at<br> richard.intheflow@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>

