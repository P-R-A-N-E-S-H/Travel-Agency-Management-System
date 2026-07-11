<?php
class BookingQueue {
    private $queue = array();

    // Add a new booking (enqueue)
    public function addBooking($booking) {
        array_push($this->queue, $booking);
    }

    // Process next booking (dequeue)
    public function processBooking() {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        }
        return null;
    }

    // Check if queue is empty
    public function isEmpty() {
        return empty($this->queue);
    }

    // Get all bookings in queue
    public function getBookings() {
        return $this->queue;
    }
}
?>
