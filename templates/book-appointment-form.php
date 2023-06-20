<form name="book-appointment-form" id="bookAppointmentForm" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" >
    <h3>Book Appointment</h3>
    
    <div class="form-group">
        <label for="book_name"> Name * </label>
        <input id="book_name" name="book_name" type="text" placeholder="Full Name" />
        <span class="errmsg" id="nameErr"></span>
    </div>
    
    <div class="form-group">
        <label for="book_email"> Email * </label>
        <input id="book_email" name="book_email" type="text" placeholder="example@gmail.com" />
        <span class="errmsg" id="emailErr"></span>
    </div>

    <div class="form-group">
        <label for="book_department"> Department * </label>
        <select id="book_department" name="book_department" >
            <option value="">Please Select</option>
            <option value="dep_1">Department 1</option>
            <option value="dep_2">Department 2</option>
        </select>
        <span class="errmsg" id="depErr"></span>
    </div>

    <div class="form-group">
        <label for="book_time"> Time * </label>
        <select id="book_time" name="book_time">
            <option value="">Please Select</option>
            <option value="4:00">4:00 Available</option>
            <option value="5:00">5:00 Available</option>
            <option value="6:00">6:00 Available</option>
        </select>
        <span class="errmsg" id="timeErr"></span>
    </div>

    <div class="form-group">
        <input type="hidden" name="action" value="book_appointment">
        <input type="submit" name="submit" value="Book Appointment" />
    </div>
</form>