<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Library User Registration</title>
</head>
<body>
    <h1>Register for the Automated Library System</h1>
    <form action="action.php" method="post">
        <table>
            <!-- Basic Information -->
            <tr>
                <td colspan="2"><legend>Basic Information</legend></td>
            </tr>
            <tr>
                <td><label for="fullName">Full Name:</label></td>
                <td><input type="text" id="fullName" name="fullName" required></td>
            </tr>
            <tr>
                <td><label for="email">Email Address:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td><input type="tel" id="phone" name="phone" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><label for="profilePhoto">Profile Photo (optional):</label></td>
                <td><input type="file" id="profilePhoto" name="profilePhoto"></td>
            </tr>

            <!-- User Type Dropdown -->
            <tr>
                <td colspan="2"><legend>User Type</legend></td>
            </tr>
            <tr>
                <td><label for="userType">Select your user type:</label></td>
                <td>
                    <select id="userType" name="userType" required>
                        <option value="student">Student</option>
                        <option value="faculty">Faculty</option>
                        <option value="guest">Guest</option>
                    </select>
                </td>
            </tr>

            <!-- Membership Preferences Checklist -->
            <tr>
                <td colspan="2"><legend>Membership Preferences</legend></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="preferences">Select your preferences (multiple choices allowed):</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" id="notifications" name="preferences[]" value="notifications">
                    <label for="notifications">Email Notifications</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" id="smsAlerts" name="preferences[]" value="smsAlerts">
                    <label for="smsAlerts">SMS Alerts</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" id="newsletter" name="preferences[]" value="newsletter">
                    <label for="newsletter">Subscribe to Newsletter</label>
                </td>
            </tr>

            <!-- Gender Radio Buttons -->
            <tr>
                <td colspan="2"><legend>Gender</legend></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="gender">Select your gender:</label>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
                </td>
            </tr>

            <!-- Submit Button -->
            <tr>
                <td colspan="2">
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>