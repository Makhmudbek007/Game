<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
body {
  text-align: center;
}
 h1 {
  color: #333;
}
 input {
  padding: 5px;
  font-size: 16px;
  margin-bottom: 10px;
}
 button {
  padding: 10px 20px;
  font-size: 16px;
}
 p#result {
  font-size: 18px;
  font-weight: bold;
  margin-top: 20px;
}
</style>
<body>
  <h1>"Raqamni top" o'yini</h1>
  <p>1 dan 100 gacha bo'lgan raqamni taxmin qiling:</p>
  <input type="number" id="guessInput">
  <button onclick="checkGuess()">Tekshirish</button>
  <p id="result"></p>

  <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="submit" value="Qaytib Boshlash">
  </form>
</body>
<script>
// Generate a random number between 1 and 100
const randomNumber = Math.floor(Math.random() * 100) + 1;
 function checkGuess() {
  // Get the user's guess from the input field
  const guessInput = document.getElementById("guessInput");
  const guess = parseInt(guessInput.value);
   // Check if the guess matches the random number
  if (guess === randomNumber) {
    document.getElementById("result").textContent = "Barakalla! Siz raqamni topdingiz!";
  } else if (guess < randomNumber) {
    document.getElementById("result").textContent = "Juda Past! Qaytib urunib ko'ring.";
  } else {
    document.getElementById("result").textContent = "Juda Baland! Qaytib urunib ko'ring.";
  }
}
</script>
</html>