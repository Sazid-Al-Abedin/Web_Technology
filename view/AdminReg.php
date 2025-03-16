<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management System - Admin</title>
</head>
<body>

    <h2>Library Management System - Admin</h2>

    <form action="submit_admin.php" method="post">

        <!-- Admin Info Fieldset -->
        <fieldset>
            <legend>Admin Information</legend>
            <table border="1">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="admin_full_name" required></td>
                </tr>
                <tr>
                    <td>Admin ID:</td>
                    <td><input type="text" name="admin_id" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="admin_email" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="admin_password" required></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="tel" name="admin_phone" required></td>
                </tr>
                <tr>
                    
                    <td>Gender</td>
                    <td>
               <select name="Gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </td>
                    <!-- 

                    <td>Gender:</td>
                    <td>
                        <input type="radio" id="Male" name="admin_gender" value="Male" required>
                        <label for="male">Male</label><br>
 
                        <input type="radio" name="admin_gender" value="Female"> 
                        <label for="female">Female</label><br>
                        <input type="radio"id="other" name="admin_gender" value="Other"> 
                        <label for="Other">Other</label><br>

                    </td>
                </tr>
                 -->

            </table>
        </fieldset>

        <!-- Library Info Fieldset -->
        <fieldset>
            <legend>Library Information</legend>
            <table border="1">
                <tr>
                    <td>Library Branch:</td>
                    <td>
                        <select name="library_branch" required>
                            <option value="Main Branch">Main Branch</option>
                            <option value="Downtown Branch">Downtown Branch</option>
                            <option value="West Side Branch">West Side Branch</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Upload Library ID Proof:</td>
                    <td><input type="file" name="library_id_proof" required></td>
                </tr>
                <tr>
                    <td>Security Question:</td>
                    <td>
                        <select name="security_question" required>
                            <option value="pet">What is your pet's name?</option>
                            <option value="school">What was your first school's name?</option>
                            <option value="city">In which city were you born?</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Answer:</td>
                    <td><input type="text" name="security_answer" required></td>
                </tr>
            </table>
        </fieldset>

        <!-- Admin Role Fieldset -->
        <fieldset>
            <legend>Admin Role</legend>
            <table border="1">
                <tr>
                    <td>Admin Role:</td>
                    <td>
                        <input type="radio" name="admin_role" value="Manager" required> Manager
                        <input type="radio" name="admin_role" value="Assistant"> Assistant
                    </td>
                </tr>
            </table>
        </fieldset>

        <!-- Register Button -->
        <fieldset>
            <table border="1">
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Register">
                    </td>
                </tr>
            </table>
        </fieldset>

    </form>

</body>
</html>
