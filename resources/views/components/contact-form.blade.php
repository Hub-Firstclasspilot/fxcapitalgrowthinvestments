<div class="col-md-6 col-sm-12 order-sm-1 contact">
    <div class="contact-form">
        <form action="" method="post" id="contact-form">
            @csrf
    
            <div class="form-input mb-2">
                <input type="text" name="" id="" placeholder="Enter your fullname...">
            </div>
    
            <div class="form-input mb-2">
                <input type="text" name="" id="" class="form-text-input" placeholder="Enter your phone...">
            </div>
            
            <div class="form-input mb-2">
                <label for="message">Message</label>
                <textarea rows="4" class="form-message-input" placeholder="Write your message here..."></textarea>
            </div>

        </form>
        <div class="form-btn-input btn-container">
            <button type="submit" class="form-btn btn-black" onclick="document.getElementById('contact-form').submit();">
                SUBMIT MESSAGE
            </button>
        </div>
    </div>
</div>