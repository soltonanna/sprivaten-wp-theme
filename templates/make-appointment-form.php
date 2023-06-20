<form name="make-appointment-form" id="makeAppointmentForm" action="<?php echo admin_url('admin-ajax.php'); ?>" method="POST" >
    <div class="form-group">
        <label for="make_name"> Name * </label>
        <input id="make_name" name="make_name" type="text" placeholder="Full Name" />
        <span class="errmsg" id="nameErr"></span>
    </div>
    
    <div class="form-group">
        <label for="make_email"> Email * </label>
        <input id="make_email" name="make_email" type="text" placeholder="example@gmail.com" />
        <span class="errmsg" id="emailErr"></span>
    </div>

    <div class="form-group">
        <label for="make_department"> Department * </label>
        <select id="make_department" name="make_department" >
            <option value="">Please Select</option>
            <option value="dep_1">Department 1</option>
            <option value="dep_2">Department 2</option>
        </select>
        <span class="errmsg" id="depErr"></span>
    </div>

    <div class="form-group">
        <label for="make_time"> Time * </label>
        <select id="make_time" name="make_time">
            <option value="">Please Select</option>
            <option value="4:00">4:00 Available</option>
            <option value="5:00">5:00 Available</option>
            <option value="6:00">6:00 Available</option>
        </select>
        <span class="errmsg" id="timeErr"></span>
    </div>

    <div class="form-group full-width">
        <textarea id="make_message" name="make_message" rows="4" cols="50" placeholder="Message"></textarea>
        <span class="errmsg" id="messErr"></span>
    </div>

    <div class="form-group full-width">
        <input type="hidden" name="action" value="make_appointment">
        <input type="submit" name="submit" value="Book Appointment" />
    </div>
</form>