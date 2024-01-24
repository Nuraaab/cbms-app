<html>
    <head>
        <title>Registartion and login page</title>
        <link rel="stylesheet" href="user/css/style.css">
    </head>
    <body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="togle-btn" onclick="login() ">LOG IN</button>
                <button type="button" class="togle-btn" onclick="register()">REGISTERATION</button>
            </div>
            <form id="login" class="input-group" method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" class="input-field" name="email" placeholder="email" required>
                <input type="text" class="input-field" name="password" placeholder="password" required>
                <input type="checkbox" class="check-box"><span class="remember">remember password</span>
                <button type="submit" class="submit-btn">LOG IN</button>
            </form>
            <form id="register" class="input-group" method="POST" action="{{ route('register') }}">
                @csrf

                <label for="role">Role:</label>
                <select id="role" name="role" required>
                  <option value="admin">Admin</option>
                  <option value="contractor">Contractor</option>
                  <option value="projectOwner">Project Owner</option>
                  <option value="supplier">Supplier</option>
                </select><br><br>

                <input type="text" class="input-field" name="username" placeholder="username" required>
                <div id="common-fields" style="display: none;">
                    <input type="text" class="input-field" name="phone_number" placeholder="Phone Number">
                    <input type="text" class="input-field" name="address" placeholder="Address">
                 </div>
                 <div id="contractor-fields" style="display: none;">
                    <input type="text" class="input-field" name="qualifications" placeholder="Qualification">
                    <input type="text" class="input-field" name="experience" placeholder="Experiance">
                 </div>
                 <div id="supplier-fields" style="display: none;">
                    <input type="text" class="input-field" name="products" placeholder="Product supplied">
                 </div>
                 <input type="email" class="input-field" name="email" placeholder="Email Address" required>
                <input type="text" class="input-field" name="password" placeholder="pasword" required>
                <button type="submit" class="submit-btn">REGISTER</button>
            </form>
           
        </div>
    </div>

    <script>
       var roleSelect = document.getElementById('role');
       var commonFieldsDiv = document.getElementById('common-fields');
       var contractorFieldDiv = document.getElementById('contractor-fields');
       var supplierFieldDiv = document.getElementById('supplier-fields');

        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");

        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="430px";
            z.style.left="0";
        }

        roleSelect.addEventListener('change', function() {
         var selectedRole = roleSelect.value;
            if (selectedRole === 'admin') {
            commonFieldsDiv.style.display = 'none';
            contractorFieldDiv.style.display = 'none';
            supplierFieldDiv.style.display = 'none';
            } else if (selectedRole === 'projectOwner') {
            commonFieldsDiv.style.display = 'block';
            contractorFieldDiv.style.display = 'none';
            supplierFieldDiv.style.display = 'none';
            }else if (selectedRole === 'contractor'){
                commonFieldsDiv.style.display = 'block';
                contractorFieldDiv.style.display = 'block';
                supplierFieldDiv.style.display = 'none';
            }else if(selectedRole === 'contractor'){
                commonFieldsDiv.style.display = 'block';
                contractorFieldDiv.style.display = 'none';
                supplierFieldDiv.style.display = 'block';
            }
  });
    </script>
    </body>
</html>