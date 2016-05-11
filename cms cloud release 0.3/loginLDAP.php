
<?php

    $errors = array();
    $message = "";

    if( isset($_POST["submit"]) ) {
        // form submitted.
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        
        // Validation
        if (!has_presence($username)) {
            $errors["username"] = "Username can't be blank";
        }
        
        if (empty($errors)) {
             // Login scenario
            if ( (isset($_POST["username"]) && (isset($_POST["password"])) ) )
            {
                // AWS Domain Controller Private IP address: 172.31.62.157 
                $ldap_server = "ldap://172.31.62.157";
                $ldaprdn = "cloud9"."\\".$username;
                $ldap = ldap_connect($ldap_server);
                
                ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
                ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
                
                $bind = @ldap_bind($ldap, $ldaprdn, $password);
                
                if ($bind) {
                    $message = "LDAP Bind Successful!";
                

                     header("Location: ../admin"); 
                } else {
                    $message = "The username and/or password you’ve entered doesn’t match any account. Please try again!";
                }   
            }
        }
    } else {
        //form not submitted.
        $username = "";
        $message = "Please log in.";
    }
?>



