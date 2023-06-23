<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/room.css">
  <title>Reservation</title>
</head>
<?php
include 'header.php';
?>
<body>
  <div class="description">
    <h1>Library Reservation Room</h1>
    <p>Welcome to the Bookstore's Room Reservation Section! We offer a variety of unique rooms for your specific needs. Whether you need a quiet study space or a vibrant room for discussions, we have you covered. Choose from our thoughtfully designed rooms, each with its own ambiance and features. Our reservation process is simple and convenient. Book your preferred room, date, and time slot. We offer flexible booking options, including hourly, half-day, and full-day reservations. Join us at the Bookstore and experience our welcoming and inspiring spaces. Happy reading!</p>
  </div>

  <div class="res-container">
    <div class="res-container2">
      <h2 class="res-h2">Room Reservation</h2>
      <form>
        <label for="room">Room:</label><br>
        <select id="room" name="room" class="form-group-ls">
          <option value="room1">Study Room</option>
          <option value="room2">Meeting Room</option>
          <option value="room3">Presentation Room</option>
          <option value="room4">Quiet Room</option>
          <option value="room5">Group Discussion Room</option>
        </select>
        <div class="form-group">
          <label for="number">Room Capasity:</label>
          <input type="number" name="quantity" min="1" max="10" required>
          <label for="date">Date:</label>
          <input type="date" id="date" name="date" required>
          <label for="time">Time:</label>
          <input type="time" id="time" name="time" required>
        </div>
        <div class="res-btn">
          <button type="submit">Reservation Room</button>
          <button type="reset">Reset</button>
        </div>
      </form>
    </div>
    <div class="image">
      <img src="images/Library (2).gif" alt="library">
    </div>
  </div>

  <?php
include 'footer.php';
?>
</body>

</html>