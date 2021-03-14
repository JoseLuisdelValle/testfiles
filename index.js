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
  document.querySelector('.exercises').insertAdjacentHTML('beforeend', `
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
  let bicepsButton = document.querySelector('#biceps-filter')
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
    document.querySelector('.exercises').innerHTML = ""
    renderExercises(bicepsArray)
  })

  let abdominalsButton = document.querySelector('#abdominals-filter')
  console.log(abdominalsButton)
  abdominalsButton.addEventListener('click', async function(event) {
    console.log("abdominals-clic") 
    event.preventDefault() 
    let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
    console.log(response)
    let json = await response.json()
    let exercisesArray = json
    let abdominalsArray = []
    for (let i = 0; i < exercisesArray.length; i++) {
      let exercise = exercisesArray[i]
      if (exercise.Muscle_Group == 'Abdominals') {
        abdominalsArray.push(exercise)
      } }
    document.querySelector('.exercises').innerHTML = ""
    renderExercises(abdominalsArray)
})



  
let backButton = document.querySelector('#back-filter')
console.log(backButton)
backButton.addEventListener('click', async function(event) {
  console.log("back-clic") 
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let backArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Muscle_Group == 'Back') {
      backArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(backArray)
  })
  
  let calvesButton = document.querySelector('#calves-filter')
  console.log(calvesButton)
  calvesButton.addEventListener('click', async function(event) {
    console.log("calves-clic") 
    event.preventDefault() 
    let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
    console.log(response)
    let json = await response.json()
    let exercisesArray = json
    let calvesArray = []
    for (let i = 0; i < exercisesArray.length; i++) {
      let exercise = exercisesArray[i]
      if (exercise.Muscle_Group == 'Calves') {
        calvesArray.push(exercise)
      } }
    document.querySelector('.exercises').innerHTML = ""
    renderExercises(calvesArray)
  })

  
  let chestButton = document.querySelector('#chest-filter')
  console.log(chestButton)
  chestButton.addEventListener('click', async function(event) {
    console.log("chest-clic") 
    event.preventDefault() 
    let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
    console.log(response)
    let json = await response.json()
    let exercisesArray = json
    let chestArray = []
    for (let i = 0; i < exercisesArray.length; i++) {
      let exercise = exercisesArray[i]
      if (exercise.Muscle_Group == 'Chest') {
        chestArray.push(exercise)
      } }
    document.querySelector('.exercises').innerHTML = ""
    renderExercises(chestArray)
})


let legsButton = document.querySelector('#legs-filter')
console.log(legsButton)
legsButton.addEventListener('click', async function(event) {
  console.log("legs-clic") 
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let legsArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Muscle_Group == 'Legs') {
      legsArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(legsArray)
})

let ShouldersButton = document.querySelector('#Shoulders-filter')
console.log(ShouldersButton)
ShouldersButton.addEventListener('click', async function(event) {
  console.log("Shoulders-clic") 
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let ShouldersArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Muscle_Group == 'Shoulders') {
      ShouldersArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(ShouldersArray)
})


let TricepsButton = document.querySelector('#Triceps-filter')
console.log(TricepsButton)
TricepsButton.addEventListener('click', async function(event) {
  console.log("Triceps-clic") 
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let TricepsArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Muscle_Group == 'Triceps') {
      TricepsArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(TricepsArray)
})



