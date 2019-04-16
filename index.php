<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="padding-top:100px;">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>NATIVE PHP-CRUD</h1>
		</div>
	</div>
	<div class="row" style="padding-top: 50px;">
	    <div class="col-md-4">
	        <h4 class="mb-3">Billing address</h4>
	        <form class="needs-validation" novalidate>
		        <div class="row">
		          <div class="col-md-6 mb-3">
		            <label for="firstName">First name</label>
		            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
		            <div class="invalid-feedback">
		              Valid first name is required.
		            </div>
		          </div>
		          <div class="col-md-6 mb-3">
		            <label for="lastName">Last name</label>
		            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
		            <div class="invalid-feedback">
		              Valid last name is required.
		            </div>
		          </div>
		        </div>

		        <div class="mb-3">
		          <label for="username">Username</label>
		          <div class="input-group">
		            <div class="input-group-prepend">
		              <span class="input-group-text">@</span>
		            </div>
		            <input type="text" class="form-control" id="username" placeholder="Username" required>
		            <div class="invalid-feedback" style="width: 100%;">
		              Your username is required.
		            </div>
		          </div>
		        </div>

		        <div class="mb-3">
		          <label for="email">Email <span class="text-muted">(Optional)</span></label>
		          <input type="email" class="form-control" id="email" placeholder="you@example.com">
		          <div class="invalid-feedback">
		            Please enter a valid email address for shipping updates.
		          </div>
		        </div>

		        <div class="mb-3">
		        	<input type="submit" class="btn btn-success">
		        </div>
	    	</form>
	    </div>
	    <div class="col-md-8">
	    	<table class="table">
	    		<tr>
	    			<th>Full Name</th>
	    			<th>User Name</th>
	    			<th>Email</th>
	    			<th>Action</th>
	    		</tr>
	    		<tbody>
	    		</tbody>
	    	</table>
	    </div>
    </div>
</div>
</body>
</html>