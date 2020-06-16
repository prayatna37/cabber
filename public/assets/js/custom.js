function bookConfirm() {
    var message = confirm('Confirm Booking! Booking cannot be Updated.');
    if (message == true) {
        return true;
    } else {
        event.preventDefault();
        return false;
    }
}

function bookingClose() {
    var message = confirm('This booking will be permanantly closed. Are You Sure?');
    if (message == true) {
        return true;
    } else {
        event.preventDefault();
        return false;
    }
}
