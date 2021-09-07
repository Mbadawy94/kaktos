<div class="row form-row">
    <form method="post" action="{{ route('messages') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-sm-12">
            <input class="form-box-input" name="name"  type="text" placeholder="Enter you name" required>
        </div>
        <div class="col-sm-12 col-md-6">
            <input class="form-box-input" name="email" type="text" placeholder="Enter you email" required>
        </div>
        <div class="col-sm-12 col-md-6">
            <input class="form-box-input" name="mobile" type="number" placeholder="Enter you mobile number" required>
        </div>
        <div class="col-sm-12">
            <textarea class="form-box-textarea" name="message" placeholder="Message"></textarea>
        </div>
        <div class="send-button-wrapp clearfix">
            <div class="send-button">
                <input type="submit" class="submit" value="submit">
                <span class="icon-ok"></span>
            </div>
        </div>
    </form>
</div>
