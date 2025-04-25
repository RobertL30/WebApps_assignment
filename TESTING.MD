# Website testing documentation

## Manual Testing

| Area Of Test		| Description                                | Expected Results                                                | Pass / Fail |
|-----------------------|--------------------------------------------|-----------------------------------------------------------------|-------------|
|Sign Up Form		| Check email validation and required fields | Error shown for invalid email or blank fields                   | Pass	     |
|Sign Up Form  		| Successfully register with valid details   | User created in SQL, redirect to sign in page                   | Pass	     |
|Login 	       		| Incorrect login details                    | Error message given to user 	          		       | Pass	     |
|Login         		| Correct login details			     | Success message, User redirected prompted to view member books  | Pass	     |
|Logout        		| Click logout button    		     | Session destroyed, User redirect to home page                   | Pass	     |
|Product listing        | View shop as guest    		     | Products displayed with information pulled from database        | Pass	     |
|Product listing        | View Members books as guest    	     | User directed to Sign in page     			       | Pass	     |
|Product listing        | View Members books as Member(Signed in)    | Successful access to Members Books webpage 		       | Pass	     |
|Shopping cart          | Clicking add to cart button on Members and non-member books   | Books are successfully added to cart and subtotal displayed	       | Pass	     |

