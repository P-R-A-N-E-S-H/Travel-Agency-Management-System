<?php
include 'db_connect.php';
include 'Booking.php';
include 'BookingQueue.php';

session_start();

// Initialize booking queue if not already set
if (!isset($_SESSION['booking_queue'])) {
    $_SESSION['booking_queue'] = new BookingQueue();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking = new Booking(
        $_POST['name'],
        $_POST['email'],
        $_POST['destination'],
        $_POST['travel_date'],
        $_POST['num_people'],
        $_POST['message']
    );

    // Add booking to queue
    $_SESSION['booking_queue']->addBooking($booking);

    // Process the next booking
    $processedBooking = $_SESSION['booking_queue']->processBooking();

    if ($processedBooking && $processedBooking->saveBooking($conn)) {
        echo "Booking successful!";
    } else {
        echo "Error processing booking.";
    }
}
?>
