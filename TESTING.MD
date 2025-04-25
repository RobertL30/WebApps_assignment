# Website testing documentation

## Manual Testing

| Area Of Test | Description                                | Expected Results                                               | Pass / Fail |
|--------------|--------------------------------------------|----------------------------------------------------------------|-------------|
|Sign Up Form  | Check email validation and required fields | Error shown for invalid email or blank fields                  | Pass	  |
|Sign Up Form  | Successfully register with valid details   | User created in SQL, redirect to sign in page                  | Pass	  |
|Login 	       | Incorrect login details                    | Error message given to user 	          		     | Pass	  |
|Sign Up Form  | Correct login details			    | Success message, User redirected prompted to view member books | Pass	  |