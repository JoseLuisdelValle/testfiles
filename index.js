firebase.auth().onAuthStateChanged(async function (user) {
  let db = firebase.firestore();
  console.log(user);
  if (user) {
    // Signed in
    console.log("signed in");
    db.collection("users").doc(user.uid).set({
      name: user.displayName,
      email: user.email,
    });
    document.querySelector(".sign-in-or-sign-out").innerHTML = `
    <button class="text-pink-500 underline sign-out">Sign Out</button>
    `;
    document
      .querySelector(".sign-out")
      .addEventListener("click", function (event) {
        console.log("sign out clicked");
        fire.aut().signOut();
        document.location.href = "index.html";
      });
  } else {
    // Signed out
    console.log("signed out");
    // Initializes FirebaseUI Auth
    let ui = new firebaseui.auth.AuthUI(firebase.auth());
    // FirebaseUI configuration
    let authUIConfig = {
      signInOptions: [firebase.auth.EmailAuthProvider.PROVIDER_ID],
      signInSuccessUrl: "index.html",
    };
    // Starts FirebaseUI Auth
    ui.start(".sign-in-or-sign-out", authUIConfig);
  }
});

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function muscleFunction() {
  document.getElementById("muscleDropdown").classList.toggle("show");
}
function equipmentFunction() {
  document.getElementById("equipmentDropdown").classList.toggle("show");
}
function movementFunction() {
  document.getElementById("movementDropdown").classList.toggle("show");
}
function levelFunction() {
  document.getElementById("levelDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches(".dropbtn")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

// Exercices added to the table https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json


function renderExercises(exercisesArray){  
for (let i = 0; i < exercisesArray.length; i++) {
  let exercise = exercisesArray[i]
  document.querySelector('.rides').insertAdjacentHTML('beforeend', `
  <tr>
  <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-500">
    ${exercise.Name}
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-500">
  ${exercise.equipment}
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-500">
  ${exercise.Sets}
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-500">
  ${exercise.Reps}
  </td>
  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
    <a href="#" class="${exercise.Name}-button text-indigo-600 hover:text-indigo-900">Add to favourites</a>
  </td>
</tr>`)
}}
  let bicepsButton = document.querySelector('#noober-pool-filter')
  console.log(bicepsButton)
  bicepsButton.addEventListener('click', async function(event) {
    console.log("biceps-clic") 
    event.preventDefault() 
    let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
    console.log(response)
    let json = await response.json()
    let exercisesArray = json
    let bicepsArray = []
    for (let i = 0; i < exercisesArray.length; i++) {
      let exercise = exercisesArray[i]
      if (exercise.Muscle_Group == 'Biceps') {
        bicepsArray.push(exercise)
      } }
    document.querySelector('.exercises').innerHTML = "hi"
    renderExercises(bicepsArray)
  })

