function downloadData() {
  // Get selected options
  var breakfast = document.getElementById("breakfast").value;
  var lunch = document.getElementById("lunch").value;
  var snacks = document.getElementById("snacks").value;
  var dinner = document.getElementById("dinner").value;

  // Get filled values
  var totalCalories = document.getElementById("calories").value;
  var totalProtein = document.getElementById("protein").value;
  var totalFat = document.getElementById("fat").value;
  var totalCarbs = document.getElementById("carbs").value;

  // Format data into a printable document
  var data = `
    <h2>Selected Options and Filled Values</h2>
    <table border="1">
      <tr>
        <th>Meal</th>
        <th>Selected Option</th>
      </tr>
      <tr>
        <td>Breakfast</td>
        <td>${breakfast}</td>
      </tr>
      <tr>
        <td>Lunch</td>
        <td>${lunch}</td>
      </tr>
      <tr>
        <td>Snacks</td>
        <td>${snacks}</td>
      </tr>
      <tr>
        <td>Dinner</td>
        <td>${dinner}</td>
      </tr>
    </table>
    <br>
    <h2>Total Nutrition Values</h2>
    <table border="1">
      <tr>
        <th>Nutrient</th>
        <th>Total</th>
      </tr>
      <tr>
        <td>Total Calories</td>
        <td>${totalCalories}</td>
      </tr>
      <tr>
        <td>Total Protein</td>
        <td>${totalProtein}</td>
      </tr>
      <tr>
        <td>Total Fat</td>
        <td>${totalFat}</td>
      </tr>
      <tr>
        <td>Total Carbs</td>
        <td>${totalCarbs}</td>
      </tr>
    </table>
  `;

  // Create a new blob with the data
  var blob = new Blob([data], { type: "text/html" });

  // Create a URL for the blob
  var url = URL.createObjectURL(blob);

  // Create a link element
  var a = document.createElement("a");

  // Set link's href to the URL of the blob
  a.href = url;

  // Set link's download attribute to specify the filename
  a.download = "nutrition_data.html";

  // Append the link to the document body
  document.body.appendChild(a);

  // Trigger a click event on the link to start the download
  a.click();

  // Clean up by revoking the URL
  URL.revokeObjectURL(url);

  // Remove the link element from the document body
  document.body.removeChild(a);
}

function addCSS(url) {
  var link = document.createElement("link");
  link.rel = "stylesheet";
  link.type = "text/css";
  link.href = url;
  document.head.appendChild(link);
}

// CSS file URL
var cssUrl = "download.css";

// Call function to link CSS file
addCSS(cssUrl);
