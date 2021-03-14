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
    document.querySelector('.muscle-filter').innerHTML = "Biceps"
    event.preventDefault() 
    let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
    console.log(response)
    let json = await response.json()
    let exercisesArray = json
    let bicepsArray = []
    for (let i = 0; i < exercisesArray.length; i++) {
      let exercise = exercisesArray[i]
       if (exercise.Muscle_Group = "Biceps"
      ) {
        bicepsArray.push(exercise)
      } }
    document.querySelector('.exercises').innerHTML = ""
    renderExercises(bicepsArray)
  })

  let abdominalsButton = document.querySelector('#abdominals-filter')
  console.log(abdominalsButton)
  abdominalsButton.addEventListener('click', async function(event) {
    console.log("abdominals-clic") 
    document.querySelector('.muscle-filter').innerHTML = "Abdominals"
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
  document.querySelector('.muscle-filter').innerHTML = "Back" 
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
    document.querySelector('.muscle-filter').innerHTML = "Calves"
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
    document.querySelector('.muscle-filter').innerHTML = "Chest"
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
  document.querySelector('.muscle-filter').innerHTML = "Legs"
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
  document.querySelector('.muscle-filter').innerHTML = "Shoulders"
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
  document.querySelector('.muscle-filter').innerHTML = "Triceps"
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

let freeButton = document.querySelector('#free-filter')
console.log(freeButton)
freeButton.addEventListener('click', async function(event) {
  console.log("free-clic") 
  document.querySelector('.equipment-filter').innerHTML = "Free Weights"
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let freeArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.equipment == 'Free Weights') {
      freeArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(freeArray)
})

let gymButton = document.querySelector('#gym-filter')
console.log(gymButton)
gymButton.addEventListener('click', async function(event) {
  console.log("gym-clic") 
  document.querySelector('.equipment-filter').innerHTML = "GYM"
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let gymArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.equipment == 'GYM') {
      gymArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(gymArray)
})

let multiButton = document.querySelector('#multi-filter')
console.log(multiButton)
multiButton.addEventListener('click', async function(event) {
  console.log("multi-clic") 
  document.querySelector('.movement-filter').innerHTML = "Multi-Joint Exercise"
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let multiArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Joint == 'Multi-Joint Exercise') {
      multiArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(multiArray)
})

let singleButton = document.querySelector('#single-filter')
console.log(singleButton)
singleButton.addEventListener('click', async function(event) {
  console.log("single-clic") 
  document.querySelector('.movement-filter').innerHTML = "Single-Joint Exercise"
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let singleArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Joint == 'Single-Joint Exercise') {
      singleArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(singleArray)
})
let beginnerButton = document.querySelector('#beginner-filter')
console.log(beginnerButton)
beginnerButton.addEventListener('click', async function(event) {
  console.log("beginner-clic") 
  document.querySelector('.level-filter').innerHTML = "Beginner"
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let beginnerArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Level == 'Beginner') {
      beginnerArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(beginnerArray)
})
let intermediateButton = document.querySelector('#intermediate-filter')
console.log(intermediateButton)
intermediateButton.addEventListener('click', async function(event) {
  console.log("intermediate-clic") 
  document.querySelector('.level-filter').innerHTML = "Intermediate"
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let intermediateArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Level == 'Intermediate') {
      intermediateArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(intermediateArray)
})

let advancedButton = document.querySelector('#advanced-filter')
console.log(advancedButton)
advancedButton.addEventListener('click', async function(event) {
  console.log("advanced-clic") 
  document.querySelector('.level-filter').innerHTML = "Advanced"
  event.preventDefault() 
  let response = await fetch("https://gifted-visvesvaraya-d969f0.netlify.app/exercises.json")
  console.log(response)
  let json = await response.json()
  let exercisesArray = json
  let advancedArray = []
  for (let i = 0; i < exercisesArray.length; i++) {
    let exercise = exercisesArray[i]
    if (exercise.Level == 'Advanced') {
      advancedArray.push(exercise)
    } }
  document.querySelector('.exercises').innerHTML = ""
  renderExercises(advancedArray)
})
