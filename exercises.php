header("Access-Control-Allow-Origin: *");

$exercises = [
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Lower Abdominals",
    "Name": "Full Reverse Crunch",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 15
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Lower Abdominals",
    "Name": "Incline Hip Thrust",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": 15
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Lower Abdominals",
    "Name": "Incline Reverse Crunch",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Lower Abdominals",
    "Name": "Lying Hip Thrust",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Lower Abdominals",
    "Name": "Reverse Crunch",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Lower Abdominals",
    "Name": "Reverse Medicine Ball Crunch",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Alternating Heel Touch",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Bent-Knee Medicine Ball Hip Rotation",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Cable Chop",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Cross Crunch",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Cross Crunch w/ Medicine Ball",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Decline Cross Sit-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Decline Sit-Up w/ Twist",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Reverse Cable Chop",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Seated Medicine Ball Twist",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Obliques",
    "Name": "Trunk Rotator",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 10
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Front Plank (from knees)",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": "1 min"
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Front Plank (from toes)",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": "1 min"
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Front Plank (tripod - 1 arm and 2 legs or 2 legs and 1 arm)",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": "1 min"
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Side-Plank (from knees)",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": "1 min"
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Side-Plank (hip lift)",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": "1 min"
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Side-Plank (from toes)",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": "1 min"
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Ab Cycle",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": "1 min"
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Kneeling Ab Rollout",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Medicine Ball V-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "V-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Full Abdominals",
    "Name": "Weighted V-Up",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Upper Abdominals",
    "Name": "Bent Knee Sit-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Upper Abdominals",
    "Name": "Bent-Knee Crunch",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Upper Abdominals",
    "Name": "Crunch",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Upper Abdominals",
    "Name": "Decline Crunch",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Upper Abdominals",
    "Name": "Decline Sit-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Upper Abdominals",
    "Name": "Heel Touch",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 2,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Upper Abdominals",
    "Name": "Sit-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Abdominals",
    "Muscles_Trained": "Upper Abdominals",
    "Name": "Weighted Crunch",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 20
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "Assisted Pull-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "Close-Grip Lat Pulldown",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "Inverted Pull-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "Lat Pulldown",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "Pull-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "Reverse-Grip Lat Pullown",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "Reverse-Grip Pull-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "V-Bar Pull-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Latissimus Dorsi",
    "Name": "Wide-Grip Lat Pulldown",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Bent-Over Alternating Dumbbell Row",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Bent-Over Barbell Row",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Bent-Over Dumbbell Row",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Bent-Over Hammer Dumbbell Row",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Bent-Over Long Barbell Row",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 12
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Bent-Over Reverse-Grip Barbell Row",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 8
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Bent-Over Single-Arm Long Barbell Row",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Machine Row",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "One Arm Dumbbell Row",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 10
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Reverse Incline Dumbbell Row",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 12
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Rope Cable Row",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Seated Cable Row",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Seated Row",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Single-Arm Cable Row",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Single-Arm Dumbbell Row",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Single-Arm Lat Pulldown",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Standing Cable Row",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Lat.Dorsi/Rhomboids",
    "Name": "Standing Single-Arm Cable Row",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Alternating Dumbbell Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Alternating Hammer Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Barbell Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Bicep Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Bottom/Top/Full Curls",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Cable Curl",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Concentration Dumbbell Curl",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Cross Body Hammer Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Dumbbell Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "EZ-Bar Curl",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Hammer Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Incline Alternating Dumbbell Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": 12
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Incline Alternating Hammer Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 8
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Incline Dumbbell Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Incline Hammer Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Kneeling Cable Curl",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Lying Cable Curl",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Lying Double Biceps Cable Curl",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Lying High Cable Curl",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Machine Curl",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Overhead Double Biceps Cable Curl",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Overhead Rope Cable Curl",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Preacher Barbell Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Preacher Cable Curl",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Preacher Dumbbell Curl",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Preacher EZ-Bar Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Preacher Hammer Dumbbell Curl",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Preacher Single-Arm Dumbbell Curl",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Reverse Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Rope Cable Curl",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Seated Alternating Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Seated Alternating Hammer Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Seated Dumbbell Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Seated Hammer Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Single-Arm Barbell Curl",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Single-Arm Cable Curl",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Single-Arm Dumbbell Curl w/ Incline Bench",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Biceps",
    "Muscles_Trained": "Biceps",
    "Name": "Spider Curl",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Gastrocnemius  (larger calf muscle)",
    "Name": "Barbell Calf Raise",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Gastrocnemius  (larger calf muscle)",
    "Name": "Calf Press",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Gastrocnemius  (larger calf muscle)",
    "Name": "Calf Raise - Seated",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Gastrocnemius  (larger calf muscle)",
    "Name": "Calf Raise - Standing",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Gastrocnemius  (larger calf muscle)",
    "Name": "Dumbbell Calf Raise",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Gastrocnemius  (larger calf muscle)",
    "Name": "Single-Leg Calf Press",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Gastrocnemius  (larger calf muscle)",
    "Name": "Single-Leg Dumbbell Calf Raise",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Gastrocnemius  (larger calf muscle)",
    "Name": "Smith Machine Calf Raise",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Soleus",
    "Name": "Seated Calf Raise",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Calves",
    "Muscles_Trained": "Soleus",
    "Name": "Seated Single-Leg Calf Raise",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Alternating Dumbbell Bench Press",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Barbell Bench Press",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Chest Press",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Decline Dumbbell Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Decline Smith Machine Bench Press",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Dumbbell Bench Press",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Dumbbell Push-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Elevated Push-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Flat Bench Press",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Alternating Dumbbell Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Barbell Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Dumbbell Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Hammer Dumbbell Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Single-Arm Dumbbell Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Smith Machine Bench Press",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Twisting Dumbbell Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Kneeling Push-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Machine Bench Press",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Machine Vertical Bench Press",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Medicine Ball Crossover Push-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Push-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 12
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Single-Arm Dumbbell Bench Press",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 8
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Smith Machine Bench Press",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Twisting Dumbbell Bench Press",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Wide-Grip Push-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 10
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Cable Crossover",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 12
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Cable Fly",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Decline Dumbbell Fly",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Dumbbell Fly",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "High Cable Crossover",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Cable Fly",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Dumbbell Fly",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Incline Twisting Dumbbell Fly",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Low Cable Crossover",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Pec Deck",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Chest",
    "Muscles_Trained": "Pectoralis",
    "Name": "Pec Deck Fly",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Bent-Knee Single-Leg Hip Lift",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Elevated Hip Lift",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Elevated Single-Leg Hip Lift",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Hip Lift",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Single-Leg Hip Lift",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Deadlift",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Leg Curl",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Lying Alternating Leg Curl",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Lying Leg Curl",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Lying Single-Leg Curl",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Hamstrings",
    "Name": "Seated Leg Curl",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Diagonal Lunge",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Hack Squat",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Lunge",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Reverse Lunge",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Side Lunge",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Split Squat",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Squat",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Step-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Barbell Walking Lunge",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Diagonal Lunge",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Dumbbell Diagonal Lunge",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Dumbbell Lunge",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Dumbbell Reverse Lunge",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Dumbbell Side Lunge",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Dumbbell Split Squat",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Dumbbell Squat",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Dumbbell Step-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Dumbbell Walking Lunge",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Forward Lunge",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Lateral Barbell Squat",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Lateral Barbell Step-Up",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Lateral Squat",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Lateral Step-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Leg Press",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Lunge",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Lying Machine Squat",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Machine Hack Squat",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Reverse Lunge",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Single-Arm Barbell Side Squat",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Single-Arm Dumbbell Side Squat",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Single-Leg Barbell Squat",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Single-Leg Box Squat",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Single-Leg Dumbbell Box Squat",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Single-Leg Dumbbell Squat",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Single-Leg Squat",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Smith Machine Squat",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Split Squat",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Step-Up",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Walking Lunge",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Alternating Leg Extension",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Leg Extension",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Legs",
    "Muscles_Trained": "Quadriceps",
    "Name": "Single-Leg Extension",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Erector Spinae",
    "Name": "Alternating Superman",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Erector Spinae",
    "Name": "Back Raise",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Erector Spinae",
    "Name": "Quadruped Alternating Superman",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Erector Spinae",
    "Name": "Superman",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Back",
    "Muscles_Trained": "Erector Spinae",
    "Name": "Superman Hold",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Arnold Dumbbell Press",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Barbell Shoulder Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Dumbbell Alternating Shoulder Press",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Dumbbell Front Raise",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Dumbbell Shoulder Press",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 12
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Dumbbell Twisting Shoulder Press",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 8
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Machine Shoulder Press",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Seated Dumbbell Rear Delt Elbow Raise",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Single-Arm Dumbbell Shoulder Press",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 10
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Smith Machine Shoulder Press",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 12
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Barbell Front Raise",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Bent-Over Cable Rear Delt Raise",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Bent-Over Dumbbell Rear Delt Raise",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Cable Front Raise",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Cable Lateral Raise",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Dumbbell Lateral Raise",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Front Plate Raise",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Kneeling Single-Arm Cable Rear Delt Raise",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Lying Dumbbell External Rotation",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Lying Dumbbell Rear Delt Raise",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Lying Single-Arm Dumbbell Rear Delt Raise",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Pec Deck Real Delt Extensions",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Reverse Incline Dumbbell Rear Delt Raise",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Seated Dumbbell Rear Delt Raise",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Delts/Traps",
    "Name": "Single-Arm Cable Lateral Raise",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": 12
  },
  {
    "Muscle_Group": "Shoulders",
    "Muscles_Trained": "Rotator Cuff",
    "Name": "Cable External Rotation",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 8
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Close-Grip Bench Press",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Forward Lean Dips",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Assisted Dips",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Bench Dips",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 3,
    "Reps": 12
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Diamond Push-Up",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 8
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Dips",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Machine Dips",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Multi-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Decline Dumbbell Triceps Extension",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": 10
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Decline EZ-Bar Tricep Extension",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 12
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Decline Single Dumbbell Triceps Extension",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Decline Single-Arm Dumbbell Triceps Extension",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Dumbbell Kickback",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Incline EZ-Bar Tricep Extension",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 10
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Kneeling Cable Triceps Extension",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Leaning Overhead Tricep Extension",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Low Cable Triceps Extension",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Lying Cable Triceps Extension",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Lying EZ-Bar Triceps Extension",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Lying Overhead EZ-Bar Tricep Extension",
    "Level": "Intermediate",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Lying Reverse EZ-Bar Triceps Extension",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": 8
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Lying Single Dumbbell Triceps Extension",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Lying Single-Arm Dumbbell Triceps Extension",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Lying Tricep Extensions",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Overhead Dumbbell Triceps Extension",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 3,
    "Reps": 12
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Overhead EZ-Bar Triceps Extension",
    "Level": "Advanced",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": "3 or 4",
    "Reps": 8
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Overhead Rope Cable Tricep Extension",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Overhead Single Dumbbell Tricep Extension",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Overhead Single-Arm Cable Tricep Extension",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Overhead Single-Arm Dumbbell Tricep Extension",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Reverse Tricep Pushdown",
    "Level": "Advanced",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Rope Triceps Pushdown",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Single-Arm Towel Triceps Pushdown",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Single-Arm Triceps Pushdown",
    "Level": "Intermediate",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Towel Triceps Pushdown",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 12
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Tricep Extensions",
    "Level": "Beginner",
    "equipment": "Free Weights",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 8
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Tricep Pushdown",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "8 to 12"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "Tricep Pushdown",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": "6 to 8"
  },
  {
    "Muscle_Group": "Triceps",
    "Muscles_Trained": "Triceps",
    "Name": "V-Bar Tricep Pushdown",
    "Level": "Beginner",
    "equipment": "GYM",
    "Joint": "Single-Joint Exercise",
    "Sets": 4,
    "Reps": 10
  }
]