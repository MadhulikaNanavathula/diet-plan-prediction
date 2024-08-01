function calculateNutrition() {
  // Get selected options
  var breakfast = document.getElementById("breakfast").value;
  var lunch = document.getElementById("lunch").value;
  var snacks = document.getElementById("snacks").value;
  var dinner = document.getElementById("dinner").value;

  // Define nutrition values for each option (calories, protein, fat, carbs)
  var nutritionValues = {
      eggs: { calories: 80, protein: 6, fat: 5, carbs: 1 },
      oatmeal: { calories: 150, protein: 5, fat: 3, carbs: 27 },
      toast: { calories: 70, protein: 2, fat: 1, carbs: 13 },
      'bread-jam': { calories: 150, protein: 2, fat: 2, carbs: 30 },
      mushroom: { calories: 15, protein: 2, fat: 0, carbs: 2 },
      sprouts: { calories: 30, protein: 3, fat: 0, carbs: 6 },
      salad: { calories: 100, protein: 4, fat: 6, carbs: 10 },
      sandwich: { calories: 250, protein: 10, fat: 12, carbs: 25 },
      soup: { calories: 150, protein: 6, fat: 3, carbs: 20 },
      'sweet potato': { calories: 100, protein: 2, fat: 0, carbs: 23 },
      'brown rice': { calories: 100, protein: 2, fat: 1, carbs: 22 },
      paratha: { calories: 200, protein: 4, fat: 10, carbs: 25 },
      nuts: { calories: 180, protein: 5, fat: 15, carbs: 8 },
      fruit: { calories: 60, protein: 0.5, fat: 0, carbs: 15 },
      yogurt: { calories: 120, protein: 8, fat: 2, carbs: 15 },
      'Rice Cake': { calories: 35, protein: 1, fat: 0, carbs: 7 },
      popcorn: { calories: 30, protein: 1, fat: 1, carbs: 6 },
      chicken: { calories: 200, protein: 30, fat: 8, carbs: 0 },
      pasta: { calories: 200, protein: 7, fat: 2, carbs: 40 },
      rice: { calories: 200, protein: 4, fat: 1, carbs: 45 },
      'stir fried vegetables': { calories: 100, protein: 3, fat: 4, carbs: 15 }
  };

  // Calculate total nutrition values
  var totalCalories = nutritionValues[breakfast].calories + nutritionValues[lunch].calories + nutritionValues[snacks].calories + nutritionValues[dinner].calories;
  var totalProtein = nutritionValues[breakfast].protein + nutritionValues[lunch].protein + nutritionValues[snacks].protein + nutritionValues[dinner].protein;
  var totalFat = nutritionValues[breakfast].fat + nutritionValues[lunch].fat + nutritionValues[snacks].fat + nutritionValues[dinner].fat;
  var totalCarbs = nutritionValues[breakfast].carbs + nutritionValues[lunch].carbs + nutritionValues[snacks].carbs + nutritionValues[dinner].carbs;

  // Update input fields with calculated values
  document.getElementById("calories").value = totalCalories;
  document.getElementById("protein").value = totalProtein;
  document.getElementById("fat").value = totalFat;
  document.getElementById("carbs").value = totalCarbs;
}

